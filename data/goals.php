<?php
$goals = array(
    'platform' => array(
        'name' => 'Platform',
        'quote' => 'Firefox is the most attractive platform for browser add-on development.',
        'initiatives' => array(
            'q1' => array(
                array(
                    'name'          => 'Rewrite Developer Tools and implement new review process',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Propose improvements to the add-on compatibility process',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Rewrite Editor Tools to fully support new review process',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Switch Contributions to embedded payments flow',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Finalize marketplace specification, policies, and designs',
                    'progress'      => 10,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Complete transition into the new review process with no unreviewed add-ons publicly available',
                    'progress'      => 50,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Launch redesigned Add-ons Blog for better communication with add-on users and developers',
                    'progress'      => 50,
                    'difficulty'    => 'easy',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Finalize plans for remaining Flightdeck/AMO integration',
                    'progress'      => 50,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
            ),
            'q2' => array(
                array(
                    'name'          => 'Launch marketplace to support freemium add-ons',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => ''
                )
            ),
            'q3' => array(
                array(
                    'name'          => 'In-app purchases support in marketplace',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => ''
                )
            ),
            'q4' => array(
                
            )
        ),
        'kpi' => array(
            array(
                'name' => 'New extensions submitted per month',
                'start' => 302,
                'goal' => 600,
                'current' => $remote_data['addons_creation']['30days']['extensions_created']
            ),
            array(
                'name' => 'New extension developers per month',
                'start' => 204,
                'goal' => 350,
                'current' => ''
            ),
            array(
                'name' => 'Percentage of new extensions using the SDK',
                'start' => '0.05%',
                'goal' => '50%',
                'current' => round($remote_data['addons_creation']['30days']['sdk_created'] / $remote_data['addons_creation']['30days']['extensions_created'], 2).'%'
            ),
            array(
                'name' => 'New add-ons created using the Add-on Builder per month',
                'start' => '',
                'goal' => '',
                'current' => ''
            ),
            array(
                'name' => 'Average review time for new add-ons',
                'start' => '',
                'goal' => '',
                'current' => ''
            )
        )
    ),
    'performance' => array(
        'name' => 'Performance',
        'quote' => 'Add-ons don\'t degrade Firefox performance.',
        'initiatives' => array(
            'q1' => array(
                array(
                    'name'          => 'Display performance warnings on AMO for add-ons causing significant Firefox start-up delays',
                    'progress'      => 75,
                    'difficulty'    => 'high',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Establish acceptable performance ranges and blocklist policy',
                    'progress'      => 25,
                    'difficulty'    => 'low',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Gather data on add-on performance in the wild and reach out/blocklist',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Automate performance tests for newly submitted add-ons',
                    'progress'      => 10,
                    'difficulty'    => 'hard',
                    'details'       => ''
                )
            ),
            'q2' => array(
                array(
                    'name'          => 'Expose performance information in Firefox',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Provide on-demand performance analysis tool',
                    'progress'      => 0,
                    'difficulty'    => 'high',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Launch performance campaign directed at developers',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => ''
                )
            ),
            'q3' => array(
                array(
                    'name'          => 'Expand performance testing to cover other measurements',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => ''
                )
            ),
            'q4' => array(
                
            ),
        ),
        'kpi' => array(
            
        )
    ),
    'penetration' => array(
        'name' => 'Penetration',
        'quote' => '60% of Firefox users use extensions.',
        'initiatives' => array(
            'q1' => array(
                array(
                    'name'          => 'Finish Discovery Pane for Firefox 4',
                    'progress'      => 75,
                    'difficulty'    => 'easy',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Launch mobile-friendly versions of core AMO pages',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Redesign homepage and add-on details page',
                    'progress'      => 50,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Create "getting started" page with video',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Revamp process of featuring add-ons',
                    'progress'      => 0,
                    'difficulty'    => 'easy',
                    'details'       => ''
                ),
                array(
                    'name'          => 'Begin locale-specific featured lists in 3 tier 1 locales',
                    'progress'      => 0,
                    'difficulty'    => 'easy',
                    'details'       => ''
                )
            ),
            'q2' => array(
                
            ),
            'q3' => array(
                array(
                    'name'          => 'Improve experience for non-English locales in AMO',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => ''
                )
            ),
            'q4' => array(
                array(
                    'name'          => 'Localization campaign to localize more add-ons and metadata',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => ''
                )
            )
        ),
        'kpi' => array(

        )
    ),
    'vampires' => array(
        'name' => 'Time Vampires',
        'quote' => '',
        'initiatives' => array(
            'q1' => array(

            ),
            'q2' => array(
                
            ),
            'q3' => array(
                array(
                    'name'          => 'Move Persona submission and management to AMO; decommission GetPersonas.com',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => ''
                )
            ),
            'q4' => array(
                array(
                    'name'          => 'Finish migrating pages to Django and decommission PHP',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => ''
                )
            ),
        ),
        'kpi' => array(
            
        )
    )
);

?>