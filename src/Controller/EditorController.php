<?php

namespace App\Controller;

use App\Controller\AppController;

class EditorController extends AppController
{
	public $layout = 'app';
	
	public function index($projectId, $currentPageId = null)
	{
		$this->loadModel('Projects');

		$project = $this->Projects->find('all', [
			'conditions' => [
				'id' => $projectId
			],
			'contain' => ['Pages']
		])->first();

		if ((int)$currentPageId) {
			foreach ($project->pages as $page) {
				if ($page->id == $currentPageId) {
					$currentPage = $page;
					break;
				}
			}
		} else {
			$currentPage = $project->pages[0];	
		}
		

		$this->set(compact('project', 'projectId', 'currentPage'));
	}
}