<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 * @method \App\Model\Entity\AppCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $this->loadModel('AppCategories');

        $slugs = $this->request->query('slugs');

        if ($slugs) {
            $this->paginate['conditions'] = [
                'slug IN' => explode(",", $slugs)
            ];
        }

        $categories = $this->paginate($this->AppCategories);

        $this->set([
            'categories' => $categories,
            '_serialize' => ['categories']
        ]);
    }

}
