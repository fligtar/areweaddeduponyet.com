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
    <li>The add-on review process is seen as a helpful validation rather than an annoying burden</li>
</ul>
DETAILS
,
        'initiatives' => array(
            'q1' => array(
                array(
                    'name'          => 'Rewrite Developer Tools and implement new review process',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'Simplify and improve the Developer Tools according to the <a href="https://docs.google.com/Doc?docid=0Acwo2Bn17-PrZGZudHRobnJfNzhmNTh6dGtmeg&hl=en">spec</a> and move to the new Django platform. Include support for the <a href="https://docs.google.com/Doc?docid=0Acwo2Bn17-PrZGZudHRobnJfNzdka3Q2bTdkYw&hl=en">new review process</a> where developers are required to select a review process. <a href="http://people.mozilla.com/~chowse/drop/amo/devtools/v3/">Designs</a>',
                ),
                array(
                    'name'          => 'Propose improvements to the add-on compatibility process',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'The current compatibility process takes several months prior to a major release and requires manual effort by add-on developers. In order to move to quarterly Firefox releases, a better method of maintaining compatibility is needed.'
                ),
                array(
                    'name'          => 'Rewrite Editor Tools to fully support new review process',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => 'Move Editor Tools to the new Django codebase for better interaction with the rest of the site and more fully support the new review process.'
                ),
                array(
                    'name'          => 'Switch Contributions to embedded payments flow',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => 'PayPal\'s embedded payments allows users to make contributions to developers without leaving the site. This will lay the groundwork for using the same system for marketplace.'
                ),
                array(
                    'name'          => 'Finalize marketplace specification, policies, and designs',
                    'progress'      => 10,
                    'difficulty'    => 'medium',
                    'details'       => 'Prepare for marketplace implementation in Q2 by finalizing the spec, starting on policies for developers and site management, and working on the designs.'
                ),
                array(
                    'name'          => 'Complete transition into the new review process with no unreviewed add-ons publicly available',
                    'progress'      => 50,
                    'difficulty'    => 'medium',
                    'details'       => 'With over 7,000 add-ons in the sandbox, requiring Editor review to be listed on AMO will cause a surge in the review queues as we switch to the new process. We should be ready to handle this surge and return the queues to normal by the end of the quarter.'
                ),
                array(
                    'name'          => 'Launch redesigned Add-ons Blog for better communication with add-on users and developers',
                    'progress'      => 90,
                    'difficulty'    => 'easy',
                    'details'       => 'Our blog is a frequent stream of important information on add-ons, AMO, Jetpack, Personas, etc. and needs an improved layout and design.'
                ),
                array(
                    'name'          => 'Finalize plans for remaining FlightDeck/AMO integration',
                    'progress'      => 50,
                    'difficulty'    => 'medium',
                    'details'       => 'Determine integration and interaction points between AMO and builder.AMO for the rest of the year.'
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
                'start' => '5%',
                'goal' => '50%',
                'current' => (!empty($remote_data['addons_creation']['30days']['extensions_created']) ? round(($remote_data['addons_creation']['30days']['sdk_created'] / $remote_data['addons_creation']['30days']['extensions_created']) * 100, 2) : 0).'%'
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
            ),
            array(
                'name' => 'Percentage of user-installed add-ons active on AMO',
                'start' => '68%',
                'goal' => '90%',
                'current' => (!empty($remote_data['ecosystem_addonusage']['latest']['addons_installed']) ? round(($remote_data['ecosystem_addonusage']['latest']['amo_active_adu'] / $remote_data['ecosystem_addonusage']['latest']['addons_installed']) * 100, 2) : 0).'%'
            ),
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
                    'details'       => 'Users should know when they\'re about to install an add-on that will slow their browser down. When our automated testing identifies slow add-ons, we should show warnings on AMO.'
                ),
                array(
                    'name'          => 'Establish acceptable performance ranges and blocklist policy',
                    'progress'      => 25,
                    'difficulty'    => 'low',
                    'details'       => 'For several key metrics (start-up time, page load time, etc.) identify ranges that are deemed great, okay, poor, and unacceptable and the action to be taken for add-ons that fall into those ranges. Revamp the add-ons blocklist policy and include performance ranges.'
                ),
                array(
                    'name'          => 'Gather data on add-on performance in the wild and reach out/blocklist',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => 'Using data obtained from real-world usage, identify slow add-ons and work with the developers to correct the problems.'
                ),
                array(
                    'name'          => 'Automate performance tests for newly submitted add-ons',
                    'progress'      => 10,
                    'difficulty'    => 'hard',
                    'details'       => 'All newly submitted add-ons and versions should undergo automated performance testing before being reviewed by an Editor.'
                )
            ),
            'q2' => array(
                array(
                    'name'          => 'Expose performance information in Firefox',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'Include performance data in AMO\'s API and display in the Firefox Add-ons Manager.'
                ),
                array(
                    'name'          => 'Provide on-demand performance analysis tool',
                    'progress'      => 0,
                    'difficulty'    => 'high',
                    'details'       => 'Allow developers to upload an add-on and get emailed a performance report before submitting to AMO.'
                ),
                array(
                    'name'          => 'Launch performance campaign directed at developers',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'Bring performance to the forefront of developers\' minds when developing their add-ons.'
                )
            ),
            'q3' => array(
                array(
                    'name'          => 'Expand performance testing to cover other measurements',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'In addition to start-up time (Ts), we should also measure add-on impact on page load time (Tp) and other measures.'
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
                    'progress'      => 100,
                    'difficulty'    => 'easy',
                    'details'       => 'The Get Add-ons pane of the Firefox 4 Add-ons Manager will be a huge source of add-on discovery and downloads.'
                ),
                array(
                    'name'          => 'Launch mobile-friendly versions of core AMO pages',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'Build mobile-friendly versions of the homepage, add-on details page, category browse, and search results. <a href="https://wiki.mozilla.org/Mobile/webdevplan/mockups#AMO_Hi-Fi_Mockups">Designs</a>'
                ),
                array(
                    'name'          => 'Redesign homepage and add-on details page',
                    'progress'      => 25,
                    'difficulty'    => 'medium',
                    'details'       => 'Simplify add-on details page so that important information is front and center and advanced details are available but not highlighted. Revamp homepage to feature more add-ons and better promotions. <a href="http://chowse.github.com/amo-redux/homepage.html">New Homepage design</a> | <a href="http://chowse.github.com/amo-redux/detail.html">New details page design</a>'
                ),
                array(
                    'name'          => 'Create "getting started" page with video',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'AMO needs a page to explain what add-ons are, why users would want them, and offer one or two awesome add-ons to try out. There should be an easy-to-understand video with animation.'
                ),
                array(
                    'name'          => 'Revamp process of featuring add-ons',
                    'progress'      => 25,
                    'difficulty'    => 'easy',
                    'details'       => 'The process of featuring add-ons is not transparent and has been neglected for many months. Propose and implement a better system.'
                ),
                array(
                    'name'          => 'Begin locale-specific featured lists in 3 tier 1 locales',
                    'progress'      => 0,
                    'difficulty'    => 'easy',
                    'details'       => 'We currently feature the same add-ons in all locales, most of which are not localized in those locales. We should begin maintaining locale-specific featured lists.'
                )
            ),
            'q2' => array(
                
            ),
            'q3' => array(
                array(
                    'name'          => 'Improve experience for non-English locales in AMO',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'There\'s a lot we can do to improve the experience for users of non-English locales, many of which are tracked by <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=635826">this bug</a>.'
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
            array(
                'name' => 'Firefox Desktop users with an extension installed',
                'start' => '40%',
                'goal' => '60%',
                'current' => ($remote_data['ecosystem_addonusage']['latest']['penetration'] * 100).'%'
            ),
            array(
                'name' => 'Firefox Mobile users with an extension installed',
                'start' => '0%',
                'goal' => '40%',
                'current' => ($remote_data['ecosystem_addonusage']['latest_mobile']['penetration_adu'] * 100).'%'
            )
        )
    )/*,
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
    )*/
);

?>