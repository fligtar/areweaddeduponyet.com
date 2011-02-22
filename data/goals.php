<?php
$goals = array(
    'platform' => array(
        'name' => 'Platform',
        'quote' => 'Firefox is the most attractive platform for browser add-on development.',
        'details' => <<<DETAILS
<p>In the last year, the browser add-ons landscape has been turned on its head with 3 new entrants: Chrome, Safari, and Opera. All have restartless, easy-to-develop platforms and developers are flocking to them. We need to re-establish our dominance in add-ons and, hopefully, web/app platforms in general.</p>

<h4>Where are we right now?</h4>
<p>Our XUL platform is extremely powerful but seen as outdated and hard to learn. The Add-on SDK is making good progress and promises restartless, process-separated add-ons that are very easy to learn and write.</p>

<h4>Where do we want to be?</h4>
<ul>
    <li>Developers have all the tools, documentation, and support they need to build great add-ons</li>
    <li>It's easy to get off the ground quickly with the SDK</li>
    <li>There's a clear path to monetization (or voluntary contributions) for interested developers</li>
    <li>Firefox and our platform update quickly to fix bugs and provide new features without introducing compatibility hassles</li>
    <li>Add-ons want to be hosted in our gallery because of its unmatched add-on distribution and discoverability channels</li>
    <li>Add-on review process is seen as a helpful validation rather than an annoying burden</li>
</ul>
DETAILS
,
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
                    'progress'      => 75,
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
        'details' => <<<DETAILS
<p>Add-ons are one of biggest reasons people use Firefox, but their performance impact is also one of the reasons people leave, whether they realize it or not. The worst offenders are add-ons not hosted on AMO and installed via third parties, but even hosted add-ons share some of the blame. It's time to get serious about add-on performance impacts.</p>

<h4>Where are we right now?</h4>
<p>The Automation team can manually run startup (Ts) tests for the most popular add-ons, and AMO is ready to show performance warnings on those add-ons alerting users to the slowness.</p>

<h4>Where do we want to be?</h4>
<ul>
    <li>Establish a measurable metric for overall add-on performance that we drive downward over the year</li>
    <li>Performance documentation and best practices are provided for developers to follow</li>
    <li>Policies are set in place and extreme violators are removed from AMO and/or blocklisted</li>
    <li>Developers can test their add-on's performance impact with tools BEFORE exposing to end users</li>
    <li>Users are aware of the performance impacts of their add-ons and must consciously choose to install a performance degrading add-on</li>
    <li>Adoption of the SDK platform grows and brings performance improvements with it</li>
</ul>
DETAILS
,
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
        'details' => <<<DETAILS
<p>Users who install add-ons are more likely to stick with Firefox and become loyal fans and evangelists. Rather than trying to increase the number of add-ons users have installed, we should focus on increasing the number of users with add-ons.</p>

<h4>Where are we right now?</h4>
<p>At last measure in October 2010, 40% of all Firefox users had at least one extension or theme installed. Firefox 4 provides a way for us to consistently and reliably measure this percentage, and after release we can use that as the baseline.</p>

<h4>Where do we want to be?</h4>
<ul>
    <li>60% of Firefox users have at least one extension (not Persona, theme, etc.) installed</li>
    <li>We don't count third-party-installed add-ons such as Java Console</li>
</ul>
DETAILS
,
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