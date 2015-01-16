<?php
$pageTitle = "Home";
include("includes/top.php"); ?>
<!----------------------------------
------------------------------------->
       
       
       <div class="download_feature">
            <!--<h1 class="title">Flex Grid System</h1>-->
            <img src="images/logo_b_black.png" alt="" class="logo">
            <!--<p class="logo_subtitle">Grid System</p>-->
            <p class="subtitle">A simplistic CSS grid system built for responsive websites</p>

            <p class="btn_container"><a href="https://github.com/dartanian300/Flex-Grid-System/zipball/master" class="btn">Download Flex</a></p>
            <p class="github"><a href="https://github.com/dartanian300/Flex-Grid-System">View on GitHub</a></p>
            <div class="clear"></div>
        </div><!-- /download_feature -->
       
       
       <div class="content inner_rim home">
           
            <div class="grid">
                <div class="row sm-full lg-four">
                    <div class="parent">
                        <i class="fa fa-th fa-3x"></i>
                        <h3>What is it?</h3>
                        <p>The Flex Grid System is a css grid system designed specifically for responsive (flexing) sites.  It's semantic, easy to use and customize, and very flexible (get it?).</p>
                    </div><!-- /parent -->
                    
                    <div class="parent">
                        <i class="fa fa-line-chart fa-3x"></i>
                        <h3>Why use it?</h3>
                        <p>Increased productivity, powerful features.  Rapid prototyping, uniform margins, easy page layout, layout variations in CMSs... the list goes on.  In fact, grids can be used in pretty much any site.  Trust me, they'll make your life easier.  In fact, this page is using Flex Grids right now!</p>
                    </div><!-- /parent -->
                    
                    <div class="parent">
                        <i class="fa fa-question-circle fa-3x"></i>
                        <h3>How to use it</h3>
                        <p>Check out our <a href="quickstart.php">Quick-Start Guide</a> for a primer, or dive into the <a href="documentation.php">documentation</a> for a much fuller look.  Have questions or suggestions?  Head on over the the GitHub repository and <a href="https://github.com/dartanian300/Flex-Grid-System/issues">drop me a line</a>.</p>
                    </div><!-- /parent -->
                </div><!-- /row -->
                
                <div class="row sm-full lg-four">
                    <div class="parent">
                        <h3>Features</h3>
                        <ul>
                            <li>Responsive and Standard Grids</li>
                            <li>Parent-Based Sizing</li>
                            <li>Percentage-Based</li>
                            <li>Highly (and Easily) Customizable</li>
                            <li>Can be Infinitely Nested</li>
                            <li>Able to Remove Gutter on a Grid by Grid Basis</li>
                            <li>Cross-Browser Friendly</li>
                            <li>Semantic</li>
                        </ul>
                    </div><!-- /parent -->
                    
                    <div class="sm-full lg-eight columns">
                        <h3>Example</h3>
                        <br>
                        <code>
    &lt;div class="grid"&gt;
        &lt;div class="sm-twelve md-three columns"&gt;Element 1&lt;/div&gt;
        &lt;div class="sm-twelve md-three md-offset-by-three columns"&gt;Element 2&lt;/div&gt;
        &lt;div class="sm-twelve md-three columns"&gt;Element 3&lt;/div&gt;
    &lt;/div&gt;
                        </code>

                        <p>Renders</p>

                        <div class="grid example">
                            <div class="sm-twelve md-three columns">Element 1</div>
                            <div class="sm-twelve md-three md-offset-by-three columns">Element 2</div>
                            <div class="sm-twelve md-three columns">Element 3</div>
                        </div>
                    </div><!-- /8 cols-->
                </div><!-- /row -->
            </div><!-- /grid -->
            
            
       </div><!-- /content -->
           
<!----------------------------------
------------------------------------->
<?php include("includes/bottom.php"); ?>