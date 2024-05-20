<?php 
	return [
		[
			'label' => 'Dashboard',
			'route' => 'admin.dashboard',
			'icon' => 'fa-home'
		],
		[
			'label' => 'Category Manager',
			'route' => 'category.index',
			'icon' => 'fa-list',
			'items' => [
				[
					'label' => 'All Category',
					'route' => 'category.index',
				],
				[
					'label' => 'Add Category',
					'route' => 'category.create',
				]
			]
		],
		[
			'label' => 'Post Manager',
			'route' => 'post.index',
			'icon' => 'fa-tachometer-alt',
			'items' => [
				[
					'label' => 'All Post',
					'route' => 'post.index',
				],
				[
					'label' => 'Add Post',
					'route' => 'post.create',
				]
			]
		],
		[
			'label' => 'Comment Manager',
			'route' => 'comment.index',
			'icon' => 'fa-comment',
			'items' => [
				[
					'label' => 'All Comment',
					'route' => 'comment.index',
				],
			]
		],
		[
			'label' => 'Account Manager',
			'route' => 'account.index',
			'icon' => 'fa-user',
			'items' => [
				[
					'label' => 'All Account',
					'route' => 'account.index',
				],
			]
		],
		[
			'label' => 'User Manager',
			'route' => 'user.index',
			'icon' => 'fa-user',
			'items' => [
				[
					'label' => 'All User',
					'route' => 'user.index',
				],
				[
					'label' => 'Add User',
					'route' => 'user.create',
				]
			]
		],
	]
 ?>