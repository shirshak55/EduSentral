<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all'     => 'All',
        'yes'     => 'Yes',
        'no'      => 'No',
        'custom'  => 'Custom',
        'actions' => 'Actions',
        'active'  => 'Active',
        'buttons' => [
            'save'   => 'Save',
            'update' => 'Update',
        ],
        'hide'              => 'Hide',
        'inactive'          => 'Inactive',
        'none'              => 'None',
        'show'              => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create'     => 'Create Role',
                'edit'       => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions'     => 'Permissions',
                    'role'            => 'Role',
                    'sort'            => 'Sort',
                    'total'           => 'role total|roles total',
                ],
            ],

            'users' => [
                'active'              => 'Active Users',
                'all_permissions'     => 'All Permissions',
                'change_password'     => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create'              => 'Create User',
                'deactivated'         => 'Deactivated Users',
                'deleted'             => 'Deleted Users',
                'edit'                => 'Edit User',
                'management'          => 'User Management',
                'no_permissions'      => 'No Permissions',
                'no_roles'            => 'No Roles to set.',
                'permissions'         => 'Permissions',

                'table' => [
                    'confirmed'      => 'Confirmed',
                    'created'        => 'Created',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Last Updated',
                    'name'           => 'Name',
                    'first_name'     => 'First Name',
                    'last_name'      => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted'     => 'No Deleted Users',
                    'roles'          => 'Roles',
                    'social' => 'Social',
                    'total'          => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history'  => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Confirmed',
                            'created_at'   => 'Created At',
                            'deleted_at'   => 'Deleted At',
                            'email'        => 'E-mail',
                            'last_updated' => 'Last Updated',
                            'name'         => 'Name',
                            'first_name'   => 'First Name',
                            'last_name'    => 'Last Name',
                            'status'       => 'Status',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],
        ],

        'quiz' => [

            'title' => 'Quizz Management',

            'quiz' => [
                'all'        => 'All Quizzes',
                'create'     => 'Create Quiz',
                'edit'       => 'Edit Quiz',
                'management' => 'Quiz Management',
                'main'       => 'Quizzes',
            ],

            'board' => [
                'all'        => 'All Boards',
                'create'     => 'Create Board',
                'edit'       => 'Edit Board',
                'management' => 'Board Management',
                'main'       => 'Boards',

                'table' => [
                    'id'         => 'ID',
                    'name'       => 'Name',
                    'added_on'   => 'Added On',
                    'udpated_on' => 'Updated On',
                    'location'   => 'Location',
                ]
            ],

            'subject' => [
                'all'        => 'All Subjects',
                'create'     => 'Create Subject',
                'correct'    => 'Correct Subject',
                'edit'       => 'Edit Subject',
                'management' => 'Subject Management',
                'main'       => 'Subjects',
            ],



            'answer' => [
                'all'        => 'All Answers',
                'create'     => 'Create Answer',
                'correct'    => 'Correct Answer',
                'edit'       => 'Edit Answer',
                'management' => 'Answer Management',
                'main'       => 'Answers',
            ],


            'question' => [
                'all'        => 'All Questions',
                'create'     => 'Create Question',
                'edit'       => 'Edit Question',
                'management' => 'Question Management',
                'main'       => 'Questions',
            ],

            'rule' => [
                'all'        => 'All Rules',
                'create'     => 'Create Rules',
                'edit'       => 'Edit Rules',
                'management' => 'Rules Management',
                'main'       => 'Rules',

                'table' => [
                    'id'         => 'ID',
                    'name'       => 'Name',
                    'added_on'   => 'Added On',
                    'udpated_on' => 'Updated On',
                ]
            ],
            'set' => [
                'all'        => 'All Questions Set',
                'create'     => 'Create Questions Set',
                'edit'       => 'Edit Question Set',
                'management' => 'Questions Set Management',
                'main'       => 'Questions Set',

                'table'=>[
                    'name'       =>'Name',
                    'year'       =>'Year',
                    'added_on'   =>'Added on',
                    'updated_on' =>'Updated on',
                ],

                'question'=>[
                    'add'        => 'Add Question',
                    'delete'     => 'Delete Question',
                    'management' => 'Questions Management',
                ]
            ],
        ],

    ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'Login',
            'login_button'       => 'Login',
            'login_with'         => ':social_media',
            'register_box_title' => 'Register',
            'register_button'    => 'Register',
            'remember_me'        => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'forgot_password'                 => 'Forgot Your Password?',
            'reset_password_box_title'        => 'Reset Password',
            'reset_password_button'           => 'Reset Password',
            'send_password_reset_link_button' => 'Send Reset link',
        ],

        'macros' => [
            'country' => [
                'alpha'   => 'Country Alpha Codes',
                'alpha2'  => 'Country Alpha 2 Codes',
                'alpha3'  => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us'     => [
                    'us'       => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed'    => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Created At',
                'edit_information'   => 'Edit Information',
                'email'              => 'E-mail',
                'last_updated'       => 'Last Updated',
                'name'               => 'Name',
                'first_name'         => 'First Name',
                'last_name'          => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];
