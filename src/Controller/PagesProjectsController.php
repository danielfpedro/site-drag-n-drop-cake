<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PagesProjects Controller
 *
 * @property \App\Model\Table\PagesProjectsTable $PagesProjects
 */
class PagesProjectsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects']
        ];
        $this->set('pagesProjects', $this->paginate($this->PagesProjects));
        $this->set('_serialize', ['pagesProjects']);
    }

    /**
     * View method
     *
     * @param string|null $id Pages Project id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagesProject = $this->PagesProjects->get($id, [
            'contain' => ['Projects']
        ]);
        $this->set('pagesProject', $pagesProject);
        $this->set('_serialize', ['pagesProject']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagesProject = $this->PagesProjects->newEntity();
        if ($this->request->is('post')) {
            $pagesProject = $this->PagesProjects->patchEntity($pagesProject, $this->request->data);
            if ($this->PagesProjects->save($pagesProject)) {
                $this->Flash->success(__('The pages project has been saved.'));
                //return $this->redirect(['controller' => 'patava']);
                // Retorna a URL de redirecionamento
                echo json_encode($pagesProject);
            } else {
                $this->Flash->error(__('The pages project could not be saved. Please, try again.'));
            }
        }

        $this->autoRender = false;
    }

    /**
     * Edit method
     *
     * @param string|null $id Pages Project id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagesProject = $this->PagesProjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagesProject = $this->PagesProjects->patchEntity($pagesProject, $this->request->data, ['associated' => ['Projects']]);
            if ($this->PagesProjects->save($pagesProject)) {
                $this->Flash->success(__('The pages project has been saved.'));
            } else {
                $this->Flash->error(__('The pages project could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Pages Project id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null, $projectId)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagesProject = $this->PagesProjects->get($id);
        if ($this->PagesProjects->delete($pagesProject)) {
            $this->Flash->success(__('The pages project has been deleted.'));
        } else {
            $this->Flash->error(__('The pages project could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Editor', $projectId]);
    }
}
