<?php

namespace app\controllers;

use app\helpers\Notificaciones;
use app\helpers\Utils;
use Carbon\Carbon;
use tebazil\runner\ConsoleCommandRunner;
use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Class UserController
 * @package app\controllers
 */
class UserController extends Controller
{
    const TABLE = 'usuario';
    const INDEX = 'index';
    const SUCCESS = 'success';

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->post());

        return $this->render(self::INDEX, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();
        if ($model->load(Yii::$app->request->post())) {
            $model->authKey = md5(random_int(1, 9999));
            $model->accessToken = md5(random_int(1, 9999));
            $model->fecha_digitada = Carbon::now('America/Lima');
            $model->usuario_digitado = Yii::$app->user->identity->id;
            $model->ip = Yii::$app->request->userIP;
            $model->host = (string)php_uname();
            $model->estado = (int)$model->estado;
            $model->save();

            $this->encryptPassword($model->id, $model->contrasena);

            return $this->redirect([self::INDEX]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $connection = Yii::$app->db;
            $connection->createCommand()
                ->update(self::TABLE,
                    [
                        'fecha_modificada' => Carbon::now('America/Lima'),
                        'usuario_modificado' => Yii::$app->user->identity->id,
                        'ip' => Yii::$app->request->userIP,
                        'host' => (string)php_uname(),
                        'nombres' => $model->nombres,
                        'correo' => $model->correo,
                    ],
                    'id = :id', [':id' => $id])
                ->execute();
            $this->encryptPassword($model->id, $model->contrasena);

            return $this->redirect([self::INDEX]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     */
    public function actionChange($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->fecha_modificada = Carbon::now('America/Lima');
            $model->usuario_modificado = Yii::$app->user->identity->id;
            $model->ip = Yii::$app->request->userIP;
            $model->host = (string)php_uname();
            $model->update();

            if (!empty($model->contrasena_desc)) {
                $this->encryptPassword($model->id, $model->contrasena_desc);
            }

            return $this->redirect([self::INDEX]);
        }

        return $this->render('change', [
            'model' => $model,
        ]);
    }


    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect([self::INDEX]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionStatus($id)
    {
        $transaction = Yii::$app->db;
        $transaction->createCommand()
            ->update(self::TABLE,
                [
                    'estado' => 0,
                ],
                'id = ' . (int)$id)
            ->execute();

        return $this->redirect([self::INDEX]);
    }

    /**
     * @param $id
     * @return User|array|null|\yii\db\ActiveRecord
     * @throws \yii\web\NotFoundHttpException
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = User::find()->select([
                'id',
                'nombres',
                'correo',
                'estado',
            ])
                ->where('id = :id', [':id' => $id])
                ->one()
            ) !== null
        ) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * @param $id
     * @param $password
     * @return string
     */
    public function encryptPassword($id, $password)
    {
        $transaction = Yii::$app->db;
        $transaction->createCommand()
            ->update(self::TABLE,
                [
                    'contrasena' => (string)Yii::$app->getSecurity()->generatePasswordHash($password),
                ],
                'id = ' . (int)$id)
            ->execute();

        return 'ok';
    }
}
