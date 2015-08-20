<?php

namespace App\Controller;

use App\Controller\AppController;

class EditorController extends AppController
{
	public $layout = 'app';
	
	public function index($projectId, $currentPageId = null)
	{
		$this->loadModel('Projects');

		$newPage = $this->Projects->PagesProjects->newEntity();

		$project = $this->Projects->find('all', [
			'conditions' => [
				'id' => $projectId
			],
			'contain' => ['PagesProjects']
		])->first();



		if ((int)$currentPageId) {
			foreach ($project->pages_projects as $page) {
				if ($page->id == $currentPageId) {
					$currentPage = $page;
					break;
				}
			}
		} else {
			$currentPage = $project->pages_projects[0];	
		}
		

		$this->set(compact('project', 'projectId', 'currentPage', 'newPage'));
	}
}