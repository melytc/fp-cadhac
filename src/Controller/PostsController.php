<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
use Cake\Http\Exception\NotFoundException;

class PostsController extends AppController
{
	public function comunicados()
	{
		$query = $this->Posts->find('all')->where(['category_id' => 3]);
		$this->set('comunicados', $this->paginate($query));
	}

	public function comunicado($id = null)
	{
		$comunicado = $this->Posts->findById($id)->first();
		if($comunicado == null){
			throw new NotFoundException(__('El comunicado no fue encontrado. Por favor, intenta de nuevo.'));
		}
		$this->set('comunicado', $comunicado);
	}
	
	public function desaparecidos()
	{
		$query = $this->Posts->find('all')->where(['category_id' => 2]);
		$this->set('desaparecidos', $this->paginate($query));
	}

	public function publicaciones()
	{
		$query = $this->Posts->find('all')->where(['category_id' => 1]);
		$this->set('publicaciones', $this->paginate($query));
	}

	public function searchComunicados()
	{
		$search = $this->request->getQuery('q');
		$query = $this->Posts->find('all')->where(['category_id' => 3, 'title LIKE' => '%'.$search.'%']);
		$this->set('comunicados', $query);
		$this->viewBuilder()->template('comunicados');
	}

	public function searchDesaparecidos()
	{
		$search = $this->request->getQuery('q');
		$query = $this->Posts->find('all')->where(['category_id' => 2, 'title LIKE' => '%'.$search.'%']);
		$this->set('desaparecidos', $query);
		$this->viewBuilder()->template('desaparecidos');
	}
}
