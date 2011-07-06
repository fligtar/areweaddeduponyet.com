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
                    'name'          => 'Rewrite AMO Developer Tools and implement new review process',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'Simplify and improve the Developer Tools according to the <a href="https://docs.google.com/Doc?docid=0Acwo2Bn17-PrZGZudHRobnJfNzhmNTh6dGtmeg&amp;hl=en">spec</a> and move to the new Django platform. Include support for the <a href="https://docs.google.com/Doc?docid=0Acwo2Bn17-PrZGZudHRobnJfNzdka3Q2bTdkYw&amp;hl=en">new review process</a> where developers are required to select a review process. <a href="http://people.mozilla.com/~chowse/drop/amo/devtools/v3/">Designs</a>',
                ),
                array(
                    'name'          => 'Propose improvements to the add-on compatibility process',
                    'progress'      => 100,
                    'difficulty'    => 'hard',
                    'details'       => 'The current compatibility process takes several months prior to a major release and requires manual effort by add-on developers. In order to move to quarterly Firefox releases, a better method of maintaining compatibility is needed.'
                ),
                array(
                    'name'          => 'Rewrite AMO Editor Tools to fully support new review process',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'Move Editor Tools to the new Django codebase for better interaction with the rest of the site and to more fully support the new review process.'
                ),
                array(
                    'name'          => 'Switch AMO Contributions to embedded payments flow',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'PayPal\'s embedded payments allows users to make contributions to developers without leaving the site. This will lay the groundwork for using the same system for marketplace.'
                ),
                array(
                    'name'          => 'Complete transition into the new review process with no unreviewed add-ons publicly available',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'With over 7,000 add-ons in the sandbox, requiring Editor review to be listed on AMO will cause a surge in the review queues as we switch to the new process. We should be ready to handle this surge and return the queues to normal by the end of the quarter.'
                ),
                array(
                    'name'          => 'Launch redesigned Add-ons Blog for better communication with add-on users and developers',
                    'progress'      => 100,
                    'difficulty'    => 'easy',
                    'details'       => 'Our blog is a frequent stream of important information on add-ons, AMO, Jetpack, Personas, etc. and needs an improved layout and design.'
                ),
                array(
                    'name'          => 'Finalize plans for remaining Builder/AMO integration',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'Determine integration and interaction points between AMO and builder.AMO for the rest of the year.'
                ),
            ),
            'q2' => array(
                array(
                    'name'          => 'Support repacking SDK-based add-ons for new versions',
                    'progress'      => 100,
                    'difficulty'    => 'hard',
                    'details'       => 'When a Firefox update or SDK bug requires SDK-based add-ons to upgrade, we should automatically handle these repacks. This will involve the Builder repacking add-ons and submitting updates to AMO.'
                ),
                array(
                    'name'          => 'Update Developer Hub for marketplace &amp; Jetpack and move to Django',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => 'The Developer Hub should be updated for marketplace and Jetpack documentation and moved to the new Django codebase.'
                )
            ),
            'q3' => array(
                array(
                    'name'          => 'Finalize marketplace specification, policies, and designs',
                    'progress'      => 10,
                    'difficulty'    => 'medium',
                    'details'       => 'Prepare for marketplace implementation in Q2 by finalizing the spec, starting on policies for developers and site management, and working on the designs. (carry-over from Q1)'
                ),
                array(
                    'name'          => 'Builder session integration with AMO',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'When you\'re logged into AMO, you\'re logged into Builder.'
                ),
                array(
                    'name'          => 'Builder publishing to AMO gallery',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'Publish your Builder add-on to addons.mozilla.org without having to download it.'
                )
            ),
            'q4' => array(
                array(
                    'name'          => 'Integrate SDK localization web service with AMO and add-on updates',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'As localization updates are made to common pool strings, these updates must be delivered to users of SDK-based add-ons and included with new add-on downloads.'
                ),
                array(
                    'name'          => 'Launch marketplace to support freemium add-ons',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'It\'s extremely difficult for add-ons to find an effective business model that also has a good user experience. Providing a marketplace where developers can offer premium versions of their add-ons for a price will bring new developers to the platform, increase the quality of add-ons, and improve the experience.'
                ),
                /*array(
                    'name'          => 'In-app purchases support in marketplace',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'Support other kinds of business models for add-ons by providing APIs for in-app purchases.'
                )*/
            )
        ),
        'kpi' => array(
            array(
                'name' => 'New extensions submitted per month',
                'start' => 302,
                'goal' => 600,
                'current' => $remote_data['extensions_created']['30days'],
                'chart' => $remote_data['extensions_created']['chart']
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
                'current' => (!empty($remote_data['extensions_created']['30days']) ? round(($remote_data['sdk_created']['30days'] / $remote_data['extensions_created']['30days']) * 100, 2) : 0).'%',
                'chart' => $remote_data['sdk_created']['chart']
            ),
            array(
                'name' => 'Average review time for new add-ons',
                'start' => '',
                'goal' => '',
                'current' => ''
            ),
            array(
                'name' => 'Average review time for updates',
                'start' => '',
                'goal' => '',
                'current' => ''
            ),
            array(
                'name' => 'Percentage of user-installed add-ons active on AMO',
                'start' => '68%',
                'goal' => '90%',
                'current' => $remote_data['amo_percentage']['latest'].'%'
            )
        )
    ),
    'performance' => array(
        'name' => 'Performance',
        'quote' => 'Add-ons don\'t degrade Firefox performance.',
        'details' => <<<DETAILS
<p>Add-ons are one of biggest reasons people use Firefox, but their performance impact is also one of the reasons people leave, whether they realize it or not. The worst offenders are add-ons not hosted on AMO and installed via third parties, but even hosted add-ons share some of the blame. It's time to get serious about add-on performance impacts.</p>

<h4>Where are we right now?</h4>
<p>The Automation Tools team can manually run start-up (Ts) tests for the most popular add-ons, and AMO is ready to show performance warnings on those add-ons alerting users to the slowness.</p>

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
                    'progress'      => 100,
                    'difficulty'    => 'high',
                    'details'       => 'Users should know when they\'re about to install an add-on that will slow their browser down. When our automated testing identifies slow add-ons, we should show warnings on AMO.'
                ),
                array(
                    'name'          => 'Establish acceptable performance ranges and blocklist policy',
                    'progress'      => 100,
                    'difficulty'    => 'low',
                    'details'       => 'For several key metrics (start-up time, page load time, etc.) identify ranges that are deemed great, okay, poor, and unacceptable and the action to be taken for add-ons that fall into those ranges. Revamp the add-ons blocklist policy and include performance ranges.'
                ),
                array(
                    'name'          => 'Gather data on add-on performance in the wild and reach out/blocklist',
                    'progress'      => 100,
                    'difficulty'    => 'medium',
                    'details'       => 'Using data obtained from real-world usage, identify slow add-ons and work with the developers to correct the problems.'
                )
            ),
            'q2' => array(
            ),
            'q3' => array(
                array(
                    'name'          => 'Automate performance tests for newly submitted add-ons',
                    'progress'      => 50,
                    'difficulty'    => 'hard',
                    'details'       => 'All newly submitted add-ons and versions should undergo automated performance testing before being reviewed by an Editor. (carry-over from Q1)'
                ),
                array(
                    'name'          => 'Add-ons aren\'t installed without user permission',
                    'progress'      => 50,
                    'difficulty'    => 'medium',
                    'details'       => 'Almost all of the top 25 add-ons used in Firefox are installed by third parties, not the user. Most of these third parties do not ask permission and these add-ons often have horrible performance. We should disable third-party installed add-ons by default and let the user choose to opt-in to them if they wish.'
                ),
                array(
                    'name'          => 'Expose performance information in Firefox',
                    'progress'      => 10,
                    'difficulty'    => 'medium',
                    'details'       => 'Include performance data in AMO\'s API and display in the Firefox Add-ons Manager. (carry-over from Q2)'
                ),
                array(
                    'name'          => 'Provide on-demand performance analysis tool',
                    'progress'      => 25,
                    'difficulty'    => 'high',
                    'details'       => 'Allow developers to upload an add-on and get emailed a performance report before submitting to AMO. (carry-over from Q2)'
                )
            ),
            'q4' => array(
                array(
                    'name'          => 'Launch performance campaign directed at developers',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'Bring performance to the forefront of developers\' minds when developing their add-ons.'
                ),
                array(
                    'name'          => 'Expand performance testing to cover other measurements',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'In addition to start-up time (Ts), we should also measure add-on impact on page load time (Tp) and other measures.'
                )
            ),
        ),
        'kpi' => array(
            array(
                'name' => 'Add-ons over performance warning threshold',
                'start' => '',
                'goal' => '',
                'current' => ''
            ),
            array(
                'name' => 'Start-up time impact per installed add-on',
                'start' => '10%',
                'goal' => '5%',
                'current' => $remote_data['performance_avg_impact']['latest'].'%'
            )
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
    <li>We don't count add-ons that are installed without user consent, like Skype Toolbar or Java Console</li>
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
                )
            ),
            'q2' => array(
                array(
                    'name'          => 'Redesign AMO homepage and add-on details page',
                    'progress'      => 75,
                    'difficulty'    => 'medium',
                    'details'       => 'Simplify add-on details page so that important information is front and center and advanced details are available but not highlighted. Revamp homepage to feature more add-ons and better promotions. <a href="http://chowse.github.com/amo-redux/homepage.html">New Homepage design</a> | <a href="http://chowse.github.com/amo-redux/detail.html">New details page design</a> (carry-over from Q1)'
                ),
                array(
                    'name'          => 'Revamp process of featuring add-ons',
                    'progress'      => 75,
                    'difficulty'    => 'easy',
                    'details'       => 'The process of featuring add-ons is not transparent and has been neglected for many months. Propose and implement a better system. (carry-over from Q1)'
                ),
                array(
                    'name'          => 'Begin locale-specific featured lists in 3 tier 1 locales',
                    'progress'      => 100,
                    'difficulty'    => 'easy',
                    'details'       => 'We currently feature the same add-ons in all locales, most of which are not localized in those locales. We should begin maintaining locale-specific featured lists. (carry-over from Q1)'
                )
            ),
            'q3' => array(
                array(
                    'name'          => 'Create "getting started" page with video',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'AMO needs a page to explain what add-ons are, why users would want them, and offer one or two awesome add-ons to try out. There should be an easy-to-understand video with animation. (carry-over from Q1)'
                ),
                array(
                    'name'          => 'Search suggestions on AMO',
                    'progress'      => 0,
                    'difficulty'    => 'easy',
                    'details'       => 'When typing in the search box, AMO should suggest add-on names that match.'
                ),
                array(
                    'name'          => 'Show only compatible add-ons on AMO',
                    'progress'      => 0,
                    'difficulty'    => 'easy',
                    'details'       => 'When browsing around the site, users should only see add-ons that will work on their browser.'
                )
            ),
            'q4' => array(
                array(
                    'name'          => 'Localization campaign to localize more add-ons and metadata',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'Many add-ons aren\'t localized and even fewer have localized metadata on AMO. We should come up with ways to improve this for both developers and localizers.'
                ),
                array(
                    'name'          => 'Improve experience for non-English locales in AMO',
                    'progress'      => 0,
                    'difficulty'    => 'hard',
                    'details'       => 'There\'s a lot we can do to improve the experience for users of non-English locales, many of which are tracked by <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=635826">this bug</a>.'
                ),
                array(
                    'name'          => 'Mobile Discovery Pane',
                    'progress'      => 0,
                    'difficulty'    => 'easy',
                    'details'       => 'Build a mobile version of the Discovery Pane for integration in the mobile Add-ons Manager'
                ),
                array(
                    'name'          => 'Add-on Sync in Firefox',
                    'progress'      => 0,
                    'difficulty'    => 'medium',
                    'details'       => 'Sync installed add-ons across devices.'
                )
            )
        ),
        'kpi' => array(
            array(
                'name' => 'Firefox Desktop users with an extension installed',
                'start' => '40%',
                'goal' => '60%',
                'current' => ($remote_data['penetration']['latest'] * 100).'%'
            ),
            array(
                'name' => 'Firefox Mobile users with an extension installed',
                'start' => '0%',
                'goal' => '40%',
                'current' => ($remote_data['penetration_mobile']['latest'] * 100).'%'
            ),
            array(
                'name' => 'Add-ons on AMO with metadata in multiple locales',
                'start' => '',
                'goal' => '',
                'current' => ''
            ),
            array(
                'name' => 'Proportion of global add-on usage from non-English locales',
                'start' => '',
                'goal' => '',
                'current' => ''
            ),
            array(
                'name' => 'New visitors to AMO each month',
                'start' => '',
                'goal' => '',
                'current' => ''
            ),
            array(
                'name' => 'Percentage of new extensions that are restartless',
                'start' => '5%',
                'goal' => '60%',
                'current' => (!empty($remote_data['extensions_created']['30days']) ? round(($remote_data['restartless_created']['30days'] / $remote_data['extensions_created']['30days']) * 100, 2) : 0).'%',
                'chart' => $remote_data['restartless_created']['chart']
            ),
        )
    )
);

$vampires = array(
        array(
            'name'          => 'Move Persona submission and management to AMO; decommission GetPersonas.com',
            'quarter'       => 'Q3',
            'progress'      => 0,
            'difficulty'    => 'hard',
            'details'       => '<a href="http://people.mozilla.com/~chowse/drop/amo/personas/v1/">Designs</a> | <a href="http://micropipes.com/greaterpercona/">Plan</a>'
        ),
        array(
            'name'          => 'Finish migrating AMO pages to Django and decommission PHP',
            'quarter'       => 'Q4',
            'progress'      => 0,
            'difficulty'    => 'hard',
            'details'       => '<a href="https://spreadsheets.google.com/ccc?key=0AgX-nlaDaTaBdGhVd3ZlU1ZySWRiNmZ4YmgxTkV6ZlE&amp;hl=en">Migration status</a>'
        )
);

?>