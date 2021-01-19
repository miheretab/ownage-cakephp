<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;

/**
 * Pranks Controller
 * @method \App\Model\Entity\AppPrankScript[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PranksController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $slugFilter = [];
        $slug = $this->request->query('slug');

        if ($slug) {
            $this->paginate = [
                'finder' => [
                    'categories' => [
                        'slug' => $slug
                    ]
                ]
            ];
        }



        $this->loadModel('AppPrankScripts');
        $pranks = $this->paginate($this->AppPrankScripts);

        $this->set([
            'pranks' => $pranks,
            '_serialize' => ['pranks']
        ]);
    }

}
