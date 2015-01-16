<?php
$pageTitle = "Documentation";
include("includes/top.php"); ?>
<!----------------------------------
------------------------------------->
       
         
       <div class="sidebar documentation">
           <h1>Table of Contents</h1>
           
           <ol>
               <li>
                  <a href="#intro">Intro</a>
                  <ol type="i">
                      <li><a href="#basic_classes">Basic Classes</a></li>
                      <li><a href="#units">Units</a></li>
                      <li><a href="#standard_grids_vs_responsive_grids">Standard Grids vs Responsive Grids</a></li>
                      <li><a href="#parent_based_sizing">Parent-Based Sizing</a></li>
                  </ol> 
               </li>
               
               <li>
                   <a href="#customization">Customization</a>
                   <ol type="i">
                       <li><a href="#editing_flex">Editing flex.scss</a></li>
                   </ol>
               </li>
               
               <li>
                   <a href="#tips_and_tricks">Tips and Tricks</a>
                   <ol type="i">
                       <li><a href="#nesting">Nesting</a></li>
                       <li><a href="#full">.full</a></li>
                       <li><a href="#column_vs_columns">.column vs .columns</a></li>
                       <li><a href="#mix_n_match">Mix 'n Match</a></li>
                       <li><a href="#where_to_use">Where To Use?</a></li>
                       <li><a href="#set_variables_first">Set Variables First</a></li>
                   </ol>
               </li>
               
               <li><a href="#defaults">Defaults</a></li>
               
               <li><a href="#compatibility">Compatibility</a></li>
           </ol>
       </div><!-- /sidebar -->
          
       <div class="content inner_rim documentation">
           
           
            <h1>Documentation</h1>
            
            <p>*The grids on this page have additional styling for color and height to give better examples.  These styles aren't in the package.</p>
            
            <h2 id="intro">I. Intro</h2>
            <p>Flex is a powerful CSS grid framework inspired by both Skeleton and Pure.  It’s responsive, so it uses percentages instead of pixel values.  Here’s a few things to remember:</p>

            <h3 id="basic_classes">i. Basic Classes</h3>
            <p>Flex has 3 main classes:</p>
            <ul>
                <li>.grid</li>
                <li>.row</li>
                <li>.column(s)</li>
            </ul>
            
            <h4>.grid</h4>
            <p>.grid is the mother of all grids.  In order for a grid to be styled correctly, all rows and columns must be nested within .grid (however, those elements don’t have to be the direct child).</p>

            <h4>.row</h4>
            <p>Often, we need to make sure elements stay in a row regardless of their respective heights.  That’s where .row comes in.  It’ll force the elements to clear other items to avoid sticky situations.  It’s not required, but often helps.</p>

            <h4>.column(s)</h4>
            <p>.column and .columns activate an element’s styling.  This (in conjunction with a unit) is what actually defines the width of an element.</p>

           
           
            <h3 id="units">ii. Units</h3>
            <p>In addition to these basic classes, Flex has tons of unit classes that define the width of an element.  By default, it contains:</p>

            <ul>
                <li>classes .one through .twelve</li>
                <li>fractional classes .one-third, .two-thirds, .one-fifth, .two-fifths, .three-fifths, and .four-fifths</li>
            </ul>


            <h3 id="standard_grids_vs_responsive_grids">iii. Standard Grids vs Responsive Grids</h3>
            <p>Flex ships with 2 types of grids: standard and responsive.  Standard, as you might think, is the standard type of grid.  That means that if you define an element as 50% width with standard grids, it’ll always be 50% width.  However, responsive grids have the ability to change size based on the width of the browser.</p>

            <p>Both types must be nested within the .grid class and both support <a href="#parent_based_sizing">parent-based sizing</a>, but there are a few differences.</p>

            <h4>Standard Grids</h4>
            <p>A standard grid would look something like the following:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="four columns alpha"&gt;Element 1&lt;/div&gt;
                    &lt;div class="four columns"&gt;Element 2&lt;/div&gt;
                    &lt;div class="four columns omega"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid">
                <div class="four columns alpha">Element 1</div>
                <div class="four columns">Element 2</div>
                <div class="four columns omega">Element 3</div>
            </div>

            <p>As you can see, the elements are nested within a .grid class and each has a unit along with the .column(s) class.  Since the standard number of columns in Flex is 12, the above would render 3 columns of equal widths, each roughly ⅓ the size of .grid.</p>

            <p>You’ll also notice the .alpha and .omega classes.  These classes are unique to standard grids.  They define the first and lasts elements in a row and remove margin accordingly.  If you leave them out, your row will wrap onto the next line.</p>

            <p>Standard grids also support offsetting elements.</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="three columns alpha"&gt;Element 1&lt;/div&gt;
                    &lt;div class="three columns"&gt;Element 2&lt;/div&gt;
                    &lt;div class="three columns offset-by-three omega"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid">
                 <div class="three columns alpha">Element 1</div>
                 <div class="three columns">Element 2</div>
                 <div class="three columns offset-by-three omega">Element 3</div>
            </div>

            <p>This grid renders 3 columns of equal widths, but offsets the last one to create a gap.  Offsets are useful for adding space between elements and positioning elements.</p>

            <p>An example of using fractional units looks like:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="one-third column alpha"&gt;Element 1&lt;/div&gt;
                    &lt;div class="one-third column"&gt;Element 2&lt;/div&gt;
                    &lt;div class="one-third column omega"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders </p>

            <div class="grid">
                <div class="one-third column alpha">Element 1</div>
                <div class="one-third column">Element 2</div>
                <div class="one-third column omega">Element 3</div>
            </div>

            <p>The above is also the same as the first example.  However, fractional units let us achieve some layouts that are impossible with integer units, like a 5 column layout using .one-fifth.</p>

            <h5>.no-gutter</h5>
            <p>Standard grids also support a no-gutter mode where elements won’t have any spacing between them.  This is useful if you’re trying to put the contents edge to edge.</p>

            <p>To use the no-gutter mode, the syntax is exactly the same as above except you add the .no-gutter class to the .grid.</p>

            <code>
                &lt;div class="grid no-gutter"&gt;
                    &lt;div class="four columns alpha"&gt;Element 1&lt;/div&gt;
                    &lt;div class="four columns"&gt;Element 2&lt;/div&gt;
                    &lt;div class="four columns omega"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid no-gutter">
                <div class="four columns alpha">Element 1</div>
                <div class="four columns">Element 2</div>
                <div class="four columns omega">Element 3</div>
            </div>


            <h4>Responsive Grids</h4>
            <p>While standard grids are nice, the real mission of Flex is responsive grids.  Essentially, they’re the same as above with a few distinct differences.  Let’s look at an example.</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-six columns"&gt;Element 1&lt;/div&gt;
                    &lt;div class="sm-six columns"&gt;Element 2&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p> 

            <div class="grid">
                <div class="sm-six columns">Element 1</div>
                <div class="sm-six columns">Element 2</div>
            </div>

            <p>You’ll notice that both .alpha and .omega are missing.  Thats because all responsive grids have margins on both sides to ensure uniform margins when resizing.</p>

            <p>Another thing you’ll see is the “sm-" prefix on the unit.  Since responsive grids are dependent on the size of the browser, we have to tell the element at what size it should be a certain width.  In this case, we’re saying is should be six columns wide in a small (or sm) browser width.</p>

            <p>By default, Flex has the following prefixes and sizes:</p>

            <ul>
                <li>sm- -- 0em</li>
                <li>md- -- 37.5em</li>
                <li>lg-   -- 62.5em</li>
                <li>xlg- -- 81.25em</li>
            </ul>

            <p>Keep in mind that these sizes are arbitrary and can be changed, removed, and added to.  See the <a href="#customization">customization section</a> for instructions.  These sizes are achieved through media queries using the min-width property.  This allows us to omit certain sizes if we don’t want a change.</p>

            <p>For example, a typical responsive grid might look like:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-twelve lg-six columns"&gt;Element 1&lt;/div&gt;
                    &lt;div class="sm-twelve lg-six columns"&gt;Element 2&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders </p>

            <div class="grid">
                <div class="sm-twelve lg-six columns">Element 1</div>
                <div class="sm-twelve lg-six columns">Element 2</div>
            </div>

            <p>This grid will be twelve columns wide on a small and medium screens (because we didn’t define a medium size).  If it’s viewed on a large or extra-large screen, it’ll be six columns wide.  Make sense?</p>

            <p>Here’s another example:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-twelve md-four xlg-three columns"&gt;Element 1&lt;/div&gt;
                    &lt;div class="sm-twelve md-four xlg-three columns"&gt;Element 2&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders </p>

            <div class="grid">
                <div class="sm-twelve md-four xlg-three columns">Element 1</div>
                <div class="sm-twelve md-four xlg-three columns">Element 2</div>
            </div>

            <p>Here, the elements are twelve columns wide on small screens, four columns wide on medium and large screens, and three columns wide on extra-large and bigger screens.</p>

            <p>Offsets are very similar too.  They’re simply the size prefix (sm-, md-, lg-, xlg-) followed by the offset (offset-by-one, offset-by-four, offset-by-one-fifth, etc…).</p>

            <p>Here’s an example:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-twelve md-three columns"&gt;Element 1&lt;/div&gt;
                    &lt;div class="sm-twelve md-three md-offset-by-three columns"&gt;Element 2&lt;/div&gt;
                    &lt;div class="sm-twelve md-three columns"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders </p>

            <div class="grid">
                <div class="sm-twelve md-three columns">Element 1</div>
                <div class="sm-twelve md-three md-offset-by-three columns">Element 2</div>
                <div class="sm-twelve md-three columns">Element 3</div>
            </div>

            <p>In the example above, the elements are 12 columns wide on small screens and three columns wide on all other screens.  However, the middle element will be offset by three columns on medium, large, and extra-large screens, but not small screens.</p>

            <h5>Importance of using sm- first</h5>
            <p>Since Flex achieves its responsive grids using min-width in its media queries, it’s very important that you always use the sm- prefix on elements.  If you don’t, once it’s viewed on a screen smaller than the smallest size you defined, the grids will break.</p>

            <p>For example, the following grid will break on small screens:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="md-three columns"&gt;&lt;/div&gt;
                    &lt;div class="md-three columns"&gt;&lt;/div&gt;
                    &lt;div class="md-three columns"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>and this one will break on anything smaller than a large screen</p>

            <code>
                  &lt;div class="grid"&gt;
                    &lt;div class="lg-six columns"&gt;&lt;/div&gt;
                    &lt;div class="lg-six columns"&gt;&lt;/div&gt;
                    &lt;div class="lg-six columns"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>So even if you want it to be six columns all the time (but you want to use responsive grids), use sm- like the following:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-six columns"&gt;&lt;/div&gt;
                    &lt;div class="sm-six columns"&gt;&lt;/div&gt;
                    &lt;div class="sm-six columns"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

           
           
            <h3 id="parent_based_sizing">iv. Parent-Based Sizing</h3>
            <p>Often, you’ll have examples like those above that repeat the same styles.  While you can do this, it’s repetitive and difficult to change once it’s set up.  Parent-Based sizing solves this issue.</p>

            <p>Instead of styling each child element individually, the classes are applied to the parent and the child elements are styled automatically.</p>

            <p>The markup is similar to responsive grids.  All the unit classes are applied to the parent of the elements (.grid or .row) and all child elements have the .parent class.</p>

            <p>Here’s an example:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-six columns"&gt;Element 1&lt;/div&gt;
                    &lt;div class="sm-six columns"&gt;Element 2&lt;/div&gt;
                    &lt;div class="sm-six columns"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>becomes</p>

            <code>
                &lt;div class="grid sm-six"&gt;
                    &lt;div class="parent"&gt;Element 1&lt;/div&gt;
                    &lt;div class="parent"&gt;Element 2&lt;/div&gt;
                    &lt;div class="parent"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>
            
            <p>which renders</p>
            
            <div class="grid sm-six">
                <div class="parent">Element 1</div>
                <div class="parent">Element 2</div>
                <div class="parent">Element 3</div>
            </div>

            <p>If you want to define multiple sizes, just apply those units the the parent.<br /></p>
            <br />
            <code>
                &lt;div class="grid sm-six lg-three xlg-four"&gt;
                    &lt;div class="parent"&gt;Element 1&lt;/div&gt;
                    &lt;div class="parent"&gt;Element 2&lt;/div&gt;
                    &lt;div class="parent"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>
            
            <br />
            
            <div class="grid sm-six lg-three xlg-four">
                <div class="parent">Element 1</div>
                <div class="parent">Element 2</div>
                <div class="parent">Element 3</div>
            </div>

            <h4>Standard Parent-Based Sizing</h4>
            <p>Parent-Based sizing also works with standard grids.  Here’s a few examples</p>

            <code>
                &lt;div class="grid four"&gt;
                    &lt;div class="parent alpha"&gt;Element 1&lt;/div&gt;
                    &lt;div class="parent"&gt;Element 2&lt;/div&gt;
                    &lt;div class="parent omega"&gt;Element 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid four">
                <div class="parent alpha">Element 1</div>
                <div class="parent">Element 2</div>
                <div class="parent omega">Element 3</div>
            </div>
            
            <br /><br />
            
            <code>
                &lt;div class="grid three"&gt;
                    &lt;div class="parent alpha"&gt;Element 1&lt;/div&gt;
                    &lt;div class="parent"&gt;Element 2&lt;/div&gt;
                    &lt;div class="parent"&gt;Element 3&lt;/div&gt;
                    &lt;div class="parent omega"&gt;Element 4&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid three">
                <div class="parent alpha">Element 1</div>
                <div class="parent">Element 2</div>
                <div class="parent">Element 3</div>
                <div class="parent omega">Element 4</div>
            </div>

           <br /><br />
           
            <code>
                &lt;div class="grid six"&gt;
                    &lt;div class="parent alpha"&gt;Element 1&lt;/div&gt;
                    &lt;div class="parent omega"&gt;Element 2&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid six">
                <div class="parent alpha">Element 1</div>
                <div class="parent omega">Element 2</div>
            </div>

           
           
           
           
           
            <h2 id="customization">II. Customization</h2>

            <p>Not only is Flex built to be useful and easy, but it’s built specifically for customization.  If you want to customize Flex you’ll need these files:</p>

            <ul>
                <li>flex.scss</li>
                <li>flex_functions.scss</li>
                <li>flex_ie.scss (only for IE8 and below)</li>
            </ul>

            <p>Here’s a quick run through of each file:</p>

            <p>flex.scss - Contains the actual generation of flex.css and all your settings.  This is what outputs the final CSS file.</p>
            <p>flex_functions.scss - This contains all the functions used in flex.scss to generate the grids</p>

           
           
            <h3 id="editing_flex">i. Editing flex.scss</h3>
            <p>Flex is based on the values of variables and lists (arrays).  This makes it easy to define, add, and change things to suit your needs.  There are 4 main variables you’ll need to worry about:</p>

            <ul>
                <li>$gutter</li>
                <li>$numOfColumns</li>
                <li>$breakpoints</li>
                <li>$fractionalColumns</li>
            </ul>

            <h4>$gutter</h4>
            <p>Aside from when using the .no-gutter class, all Flex grids have a gutter - that is, a space between each column element.  This is where you can define that.  Keep in mind that it must be a percentage for the functions to calculate the widths correctly.  Also note that while you define a gutter, it’s achieved by applying half of $gutter as margins to each side of a columns element.</p>

            <h4>$numOfColumns</h4>
            <p>By default, Flex is based on a 12 column grid, but has support for up to 24 columns.  If you want to change how many columns are used, just change this variable to any number from 1 - 24.</p>

            <h4>$breakpoints</h4>
            <p>Since Flex is largely focused on responsive grids, it needs some fancy media queries to help!  Each project is different and will require different breakpoints, so here is where you define them. </p>

            <p>Here’s the syntax:</p>

            <code>$breakpoints: (prefix: breakpointSize...);</code>

            <p>What that means is that prefix will be used as the prefix for your media queries (sm-six or lg-two) while the breakpointSize is the size at which that specific prefix will take affect ( @media only screen and (min-width:breakpointSize) {...} )</p>

            <p>Remember, Flex’s breakpoints are calculated using min-width, not max-width, so the breakpointSize defined will be the starting point for the prefix.  Also because of this, the smallest prefix should always have the breakpointSize of 0.</p>

            <h4>$fractionalColumns</h4>
            <p>Flex also supports fractional column sizes to both make things easier to remember and to allow for widths not supported by certain $numOfColumns.</p>

            <p>The syntax:</p>

            <code>$fractionalColumns: (columnSize: fraction);</code>

            <p>So similarly to $breakpoints, the columnSize is used to define the width of an element (three columns, seven columns, two-thirds columns) and the fraction is the mathematical fraction of the columnSize.</p>

            <p>So if I wanted to use grids that were 1/7 of the parent’s width, I could define something like the following:</p>

            <code>$fractionalColumns: (one-seventh: 1/7, two-sevenths: 2/7, three-sevenths: 3/7...);</code>

            <p>The columnSize can be whatever you want, but it makes sense for it to match the fraction.  Also, any sizes defined here are calculated for all grids.  That means you can use these sizes in standard (two-thirds columns) and responsive grids (sm-two-thirds columns), as well as with offsets (offset-two-thirds columns & sm-offset-two-thirds columns).</p>


           
           
           
           
            <h2 id="tips_and_tricks">III. Tips and Tricks</h2>

           
            <h3 id="nesting">i. Nesting</h3>
            <p>Flex is pretty rock-solid and can handle most things you throw at it, including nesting grids.</p>

            <p>This is perfectly valid:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="three columns alpha"&gt;
                        3 Cols &lt;br&gt;
                        &lt;div class="six columns alpha"&gt;6 Cols&lt;/div&gt;
                        &lt;div class="six columns omega"&gt;6 Cols&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="three columns"&gt;3 Cols&lt;/div&gt;
                    &lt;div class="three columns offset-by-three omega"&gt;3 Cols - Offset 3 Cols&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>and it renders</p>

            <div class="grid">
                <div class="three columns alpha">
                    3 Cols <br>
                    <div class="six columns alpha">6 Cols</div>
                    <div class="six columns omega">6 Cols</div>
                </div>
                <div class="three columns">3 Cols</div>
                <div class="three columns offset-by-three omega">3 Cols - Offset 3 Cols</div>
            </div>

            <p>Here’s another example:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="row"&gt;
                        &lt;div class="three columns alpha"&gt;
                            3 cols&lt;br&gt;
                            &lt;div class="six columns alpha"&gt;6 cols&lt;/div&gt;
                            &lt;div class="six columns omega"&gt;6 cols&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="three columns"&gt;
                            &lt;div class="row"&gt;
                                &lt;div class="seven columns alpha"&gt;7 columns&lt;/div&gt;
                                &lt;div class="five columns omega"&gt;5 columns&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="row"&gt;
                                &lt;div class="three columns alpha"&gt;3 cols&lt;/div&gt;
                                &lt;div class="eight columns"&gt;8 columns&lt;/div&gt;
                                &lt;div class="one columns omega"&gt;1&lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="three columns offset-by-three omega"&gt;3 Cols - Offset 3 Cols&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid">
                <div class="row">
                    <div class="three columns alpha">
                        3 cols<br>
                        <div class="six columns alpha">6 cols</div>
                        <div class="six columns omega">6 cols</div>
                    </div>
                    <div class="three columns">
                        <div class="row">
                            <div class="seven columns alpha">7 columns</div>
                            <div class="five columns omega">5 columns</div>
                        </div>
                        <div class="row">
                            <div class="three columns alpha">3 cols</div>
                            <div class="eight columns">8 columns</div>
                            <div class="one columns omega">1</div>
                        </div>
                    </div>
                    <div class="three columns offset-by-three omega">3 Cols - Offset 3 Cols</div>
                </div>
            </div>

            <p>The same works for responsive grids.</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-six columns"&gt;
                        &lt;div class="sm-full md-four columns"&gt;sm - 12 Columns, md- 4 Columns&lt;/div&gt;
                        &lt;div class="sm-full md-four columns"&gt;sm - 12 Columns, md- 4 Columns&lt;/div&gt;
                        &lt;div class="sm-full md-four columns"&gt;sm - 12 Columns, md- 4 Columns&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="sm-six columns"&gt;&lt;/div&gt;
                    &lt;div class="sm-six columns"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>and even parent-based sizing:</p>

            <code>
                &lt;div class="grid four"&gt;
                    &lt;div class="parent"&gt;&lt;/div&gt;
                    &lt;div class="parent"&gt;
                        &lt;div class="seven columns"&gt;7 Columns&lt;/div&gt;
                        &lt;div class="five columns"&gt;5 Columns&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="parent"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>and</p> 

            <code>
                &lt;div class="grid sm-four md-three"&gt;
                    &lt;div class="parent"&gt;&lt;/div&gt;
                    &lt;div class="parent"&gt;
                        &lt;div class="sm-full lg-six columns"&gt;sm - 12 Columns, lg - 6 Columns&lt;/div&gt;
                        &lt;div class="sm-full lg-six columns"&gt;sm - 12 Columns, lg - 6 Columns&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="parent"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>*Note: because parent-based sizing targets all children and not direct children, nesting multiple parent-based elements may not render what you’re looking for.</p>

           
           
            <h3 id="full">ii. .full</h3>
            <p>Flex also has a shortcut class for sizing elements to width: 100%.  This can be achieved either by using the classes for the total number of columns (by default, .twelve .columns, .sm-twelve .columns etc) or by using .full.</p>

            <p>.full is used exactly the same way as those classes above, but just replaces the unit.  Here’s a few examples:</p>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="full columns"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <code>
                &lt;div class="grid"&gt;
                    &lt;div class="sm-full md-six columns"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <code>
                &lt;div class="grid sm-full md-four lg-three"&gt;
                    &lt;div class="parent"&gt;&lt;/div&gt;
                    &lt;div class="parent"&gt;&lt;/div&gt;
                    &lt;div class="parent"&gt;&lt;/div&gt;
                &lt;/div&gt;
            </code>

           
            <h3 id="column_vs_columns">iii. .column vs .columns</h3>
            <p>As you’ve seen, Flex sometimes requires .column or .columns.  You can always use either and it’ll still work the same.  I try to make this easy.</p>

           
           
            <h3 id="mix_n_match">iv. Mix ‘n Match</h3>
            <p>Don’t be afraid to try to mix and match (although it might eventually break).  One way you can do that is to mix parent-based sizing with non-parent based sizing, like so:</p>

            <code>
                &lt;div class="grid sm-full md-four lg-three"&gt;
                    &lt;div class="sm-six lg-one columns"&gt;El 1&lt;/div&gt;
                    &lt;div class="parent"&gt;El 2&lt;/div&gt;
                    &lt;div class="parent"&gt;El 3&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid sm-full md-four lg-three">
                <div class="sm-six lg-one columns">El 1</div>
                <div class="parent">El 2</div>
                <div class="parent">El 3</div>
            </div>

            <p>It works for Standard Grids too</p>

            <code>
                &lt;div class="grid four"&gt;
                    &lt;div class="parent alpha"&gt;4 Cols&lt;/div&gt;
                    &lt;div class="two columns offset-by-one"&gt;2 Cols - Offset 1 Col&lt;/div&gt;
                    &lt;div class="parent omega offset-by-one"&gt;4 Cols - Offset 2 Col&lt;/div&gt;
                &lt;/div&gt;
            </code>

            <p>Renders</p>

            <div class="grid four">
                <div class="parent alpha">4 Cols</div>
                <div class="two columns offset-by-one">2 Cols - Offset 1 Col</div>
                <div class="parent omega offset-by-one">4 Cols - Offset 2 Col</div>
            </div>

            <p>Using this method, you can get some pretty interesting results.</p>

           
           
            <h3 id="where_to_use">v. Where To Use?</h3>
            <p>While you can use Flex for layouts and sidebars and such, I personally recommend to use it only in content areas.  If you do use it for templates, know that if you need to change something, you’ll have to change it in the HTML (and potentially in several places).  You also complicate additional CSS for those elements.</p>

            <p>Flex really shines in the content areas for laying out pages that are unique.  It’s great for forms and especially for any site in a CMS (since you don’t typically touch the CSS after the template is created).</p>

           
           
            <h3 id="set_variables_first">vi. Set Variables First</h3>
            <p>Since Flex is implemented in the HTML, it’s kind of pain to go back and change things after you’ve started using it.  That’s why I’d recommend setting $breakpoints and $numOfColumns first.  $fractionalColumns and $gutter don’t break your layout, but if you change md- from 37.5em to 20em, you’ll probably have to go back and change all the places where you used md-.</p>

           
           
            <h2 id="defaults">IV. Defaults</h2>

            <p>Here’s the current default values in Flex:</p>

            <ul>
                <li>$gutter: 4%</li>
                <li>$numOfColumns: 12</li>
                <li>$breakpoints:
                    <ul>
                        <li>sm-: 0em</li>
                        <li>md-: 37.5em</li>
                        <li>lg-: 62.5em</li>
                        <li>xlg-: 81.25em</li>
                    </ul>
                </li>
                <li>$fractionalColumns:
                    <ul>
                        <li>one-third: ⅓</li>
                        <li>two-thirds: ⅔</li>
                        <li>one-fifth: ⅕</li>
                        <li>two-fifths: ⅖</li>
                        <li>three-fifths: ⅗</li>
                        <li>four-fifths: ⅘</li>
                    </ul>
                </li>
            </ul>

           
           
            <h2 id="compatibility">V. Compatibility</h2>

            <p>Flex is supported in all modern browsers and Internet Explorer 9+.  If you need support for IE8 and below, use the flex_ie.scss.  Note that this will force IE8 and below to use the largest size defined on each element, regardless of the size of the viewport.  So if you have 4 breakpoints defined but don’t want IE to use the largest size, just remove it in the IE stylesheet.</p>

            
            
       </div><!-- /content -->
           
<!----------------------------------
------------------------------------->
<?php include("includes/bottom.php"); ?>