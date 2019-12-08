<!DOCTYPE html>
<html style="" class=""><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://bmlabs.azurewebsites.net/Content/favicon.ico">
    <title>coldchain</title>
    <link href="./Content/bootstrap.css" rel="stylesheet">
    <link href="./Content/index.css" rel="stylesheet">
    <script type="text/javascript" src="./Content/settings.js"></script>
<script type="text/javascript" src="./Content/7532ed8f.js"></script><script type="text/javascript" src="./Content/92508bd0.js"></script><script type="text/javascript" src="./Content/ecffe97e.js"></script><link type="text/css" rel="stylesheet" href="./Content/f1380f75.css"><script type="text/javascript" src="./Content/6da90460.js"></script><script type="text/javascript" src="./Content/03c2b45e.js"></script><script type="text/javascript" src="./Content/a6f5c05c.js"></script><script type="text/javascript" src="./Content/a383d048.js"></script><script type="text/javascript" src="./Content/39fef661.js"></script><link type="text/css" rel="stylesheet" href="./Content/ba03abe6.css"><script type="text/javascript" src="./Content/e2b6cd91.js"></script><link type="text/css" rel="stylesheet" href="./Content/7de0e1ac.css"><script type="text/javascript" src="./Content/68f8ad3e.js"></script><link type="text/css" rel="stylesheet" href="./Content/5944815d.css"><script type="text/javascript" src="./Content/e8f4cba0.js"></script></head>
<body>
    <div id="divMap" class="divMap" style="height: 237px;"><div class="MicrosoftMap" style="position: absolute; width: 100%; height: 100%; left: 0px; top: 0px;"><div style="position: absolute; overflow: hidden; width: 100%; height: 100%; top: 0px; left: 0px;"><div class="ms-composite" style="z-index: 0; background-color: rgb(243, 242, 237); opacity: 1; position: absolute; top: 0px; left: 0px;" tabindex="-1" dir="ltr"><canvas style="z-index: 0; position: absolute; left: 0px; opacity: 1; transform-origin: left top 0px; width: 1304px; height: 237px; transform: matrix(1, 0, 0, 1, 0, 0);" id="Microsoft.Maps.Imagery.LiteRoad" width="1304" height="237"></canvas><div tabindex="0" id="mapFocus" aria-label="F.A.P - Interact to see more" style="top: 1px; left: 1px; z-index: 1; position: absolute; width: 1302px; height: 235px;"></div><canvas style="z-index: 25000; position: absolute; opacity: 0; width: 0px; height: 0px;" width="0" height="0"></canvas><canvas style="z-index: 10100; position: absolute; left: 0px; opacity: 1; transform-origin: left top 0px; transform: matrix(1, 0, 0, 1, 0, 0); width: 1304px; height: 237px;" id="vectorCanvas" width="1304" height="237"></canvas><canvas id="labelCanvasId" class="labelCanvas" style="outline: currentcolor none medium; position: absolute; z-index: 20000; width: 1504px; height: 437px; top: -100px; left: -100px; transform: translate(0px); display: block;" width="1504" height="437"></canvas></div></div><div style="position: absolute; overflow: hidden; width: 100%; height: 100%; top: 0px; left: 0px; pointer-events: none; transform: scale(1); z-index: 100;"><div style="position: absolute; width: 100%; height: 100%; pointer-events: none;"><div id="MicrosoftNav" class="NavBar_Container Light" style="position: absolute; inset: 0px 0px auto auto;" aria-expanded="false"><div class="NavBar_MapTypeButtonContainerWrapper"><div class="NavBar_MapTypeButtonContainer NavBar_MapTypeButtonHeight NavBar_Delay withBackground" id="MapStyleSelector" tabindex="0" title="Current Map Type: Road - View aerial, bird's eye, and more..." role="menu" aria-expanded="false"><div id="NavBar_MapTypeIcon" class="NavBar_MapTypeButtonIcon NavBar_MapTypeButtonHeight selectorIconRoad"></div><div id="NavBar_MapTypeText" class="NavBar_MapTypeButtonText NavBar_MapTypeButtonHeight">Road</div><div class="NavBar_MapTypeButtonDropDownIcon NavBar_MapTypeButtonHeight selectorIconDropDown"></div></div></div><div id="RadialMenu" class="NavBar_DropDown menu" role="listbox" aria-multiselectable="true" style="margin-top: 0px;"><div class="slot road selected" tabindex="0" role="option" aria-selected="true"><div class="mapTypeIcon"></div><div class="pie-label labelStyle">Road</div><div class="pie-label-description labelStyleDescription">A standard road map</div></div><div class="slot aerial" tabindex="0" role="option" aria-selected="false"><div class="mapTypeIcon"></div><div class="pie-label labelStyle">Aerial</div><div class="pie-label-description labelStyleDescription">A detailed look from above</div></div><div class="slot birdseye" tabindex="0" role="option" aria-selected="false"><div class="mapTypeIcon"></div><div class="pie-label labelStyle">Bird's eye</div><div class="pie-label-description labelStyleDescription">A better angle of aerial photography</div></div><div class="switchSlot labelToggle disabled" for="navbarLabelToggleInput" tabindex="-1" role="checkbox" aria-checked="true" aria-label="disabled" title="Turn labels on or off" aria-selected="false"><div class="labelToggle_Container labelStyle"><input id="navbarLabelToggleInput" type="checkbox" class="labelToggle_Input" checked="checked" tabindex="-1"><label class="labelStyleSwitch" title="Labels">Labels</label><label class="labelToggle_label" helper="[object Object]" role="button"></label></div></div></div><div class="birdseyeV2InfoExitControl  be2LabelsEnabled" style="display: none;"><div class="birdseyeV2InfoExitControl left"><div class="birdseyeV2InfoExitControl left bottom"><div class="birdseyeV2Geochain"></div></div></div><div class="birdseyeV2InfoExitControl right"><a id="BirdseyeV2ExitButton" class="NavBar_Button birdseyeV2Exit" title="Exit Bird's Eye" href="#" role="button"><div class="NavButton_Icon"></div></a><div class="be2LabelToggleContainer"><div class="be2LabelsTag">Labels</div><div class="be2LabelToggle switchSlot labelToggle" for="be2ToggleInput"><div class="labelToggle_Container labelStyle"><input id="be2ToggleInput" type="checkbox" class="labelToggle_Input" checked="checked" tabindex="-1"><label class="labelToggle_label" role="button"></label></div></div></div></div></div><div class="bm_LocateMeControl"><a id="LocateMeButton" class="NavBar_Button NavBar_locateMe" title="Locate me" href="#" role="button"><div class="NavButton_Icon"></div></a></div><div id="RotateButtonContainer" class="NavBarButton_Container" style="margin-top: -1.5px; display: none;"><a id="RotateLeftButton" class="NavBar_Button NavBar_rotateLeft" title="Rotate left" href="#" role="button"><div class="NavButton_Icon"></div></a><a id="RotateButton" class="NavBar_Button NavBar_rotate NavBar_heading_0D" title="Reset orientation" href="#" role="button"><div class="NavButton_Icon"></div></a><a id="RotateRightButton" class="NavBar_Button NavBar_rotateRight" title="Rotate right" href="#" role="button"><div class="NavButton_Icon"></div></a></div><a id="ZoomInButton" class="NavBar_Button NavBar_zoomIn" title="Zoom in" href="#" role="button" aria-label="Current Level 18, Zoom In "><div class="NavButton_Icon"></div></a><a id="ZoomOutButton" class="NavBar_Button NavBar_zoomOut" title="Zoom out" href="#" role="button" aria-label="Current Level 18, Zoom Out"><div class="NavButton_Icon"></div></a></div></div><div style="position: absolute; left: 5px; bottom: 5px;" class="bm_bottomLeftOverlay"><div class="bm_LogoContainer quadrantOverride"><a href="http://www.bing.com/maps?cp=47.647515008548766~-122.3826955&amp;lvl=18&amp;style=r&amp;FORM=BMLOGO" title="Bing Maps" target="mc_bingMaps" style="pointer-events: auto"><div id="bingLogo" class="bingLogoLight"></div></a></div></div><div style="position: absolute; right: 25px; bottom: 5px;" class="bm_bottomRightOverlay"><div class="ScaleBar bm_disable_highlighting quadrantOverride" style="z-index: 0;font-family: arial, helvetica, sans-serif;font-size: 9px;text-align: right;display: block"><div style="display: inline-block;position: relative;margin-left: 1em;padding-top: .5em;padding-bottom: .05em;width: 77px"><div style="color: #000;text-shadow: #fff 1px 1px">100 feet</div><div style="width: 100%;height: 3px;border: 1px solid #fff;line-height: 0;overflow: hidden"><div style="width: 100%;height: 0;border: 10px solid #49f"></div></div></div><div style="display: inline-block;position: relative;margin-left: 1em;padding-top: .5em;padding-bottom: .05em;width: 64px"><div style="color: #000;text-shadow: #fff 1px 1px">25 m</div><div style="width: 100%;height: 3px;border: 1px solid #fff;line-height: 0;overflow: hidden"><div style="width: 100%;height: 0;border: 10px solid #49f"></div></div></div></div><div class="CopyrightContainer quadrantOverride"><div id="TermsLinkContainer" class="TermsLinkContainer"><a class="ShadowTextDark" href="https://www.microsoft.com/maps/assets/docs/terms.aspx" title="Terms" target="mc_bingMaps" style="pointer-events: auto">Terms</a></div><div class="CopyrightControl" style="max-width: 1205px;"><span class="ShadowTextDark"><span class="CopyrightAttributionStyle">© 2019 HERE, © 2019 A.S.I.S Corporation</span><a class="copyrightLink ShadowTextDark" style="pointer-events: auto; display: none;"></a></span></div></div></div></div></div></div>
    <nav nav="" class="navbar navbar-default" style="z-index:10000; opacity:1.0">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#divNavBar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Truck Routing</a>
            </div>
        </div>
    </nav>
    <div id="divPanel" class="divPanel" style="height: 197px;">
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" id="txtStart" class="form-control" placeholder="Start Location" value="47.6484748,-122.3794176">
                <input type="text" id="txtEnd" class="form-control" placeholder="End Location" value="47.647466,-122.38596"><br>
                <input type="text" id="txtHeight" class="form-control" placeholder="Height of the Vehcile (m)"><br>
                <input type="text" id="txtLength" class="form-control" placeholder="Length of the Vehcile (m)"><br>
                <input type="text" id="txtGradient" class="form-control" placeholder="Max Gradient (degrees)" value="10"><br>
                <input type="text" id="txtHazard" class="form-control" placeholder="Hazarduous Materials"><br>

                <a class="lbl">Load Scenario</a>
                <div class="btn-group btn-group-justified">
                    <button type="button" class="btn btn-default" onclick="LoadScenario1();">1</button>
                    <button type="button" class="btn btn-default" onclick="LoadScenario2();">2</button>
                    <button type="button" class="btn btn-default" onclick="LoadScenario3();">3</button>
                    <button type="button" class="btn btn-default" onclick="LoadScenario4();">4</button>
                </div>
                <a id="lnkBing" href="https://binged.it/2pA8obx" target="_blank" class="lbl">Explore in Streetside Imagery</a>

                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" onclick="GetRoutes();">Get Routes</button>
                    </div>
                </div>

                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" onclick="ClearMap();">Clear Map</button>
                    </div>
                </div>
                <br><br>
                <div>
                    <span style="color:red">Car Route</span><br>
                    <span style="color:green">Truck Route</span>
                </div>
            </div>
        </form>
    </div>
    <script src="./Content/jquery-3.js"></script>
    <script src="./Content/bootstrap.js"></script>
    <script type="text/javascript" src="./Content/index.js"></script>
    <script type="text/javascript" src="./Content/settings.js"></script>
    <script type="text/javascript" src="./Content/mapcontrol.js" async="" defer="defer"></script>


</body></html>