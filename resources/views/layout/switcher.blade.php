<!-- STYLE SWITCHER -->
<div class="del-style-switcher">
    <div class="del-switcher-toggle toggle-hide"></div>
    <form>
        <section class="del-section del-section-skin">
            <h5 class="del-switcher-header">Choose Skins:</h5>
            <ul>
                <li><a href="#" title="Slate Gray" class="switch-skin slategray" data-skin="assets/css/skins/slategray.css">Slate Gray</a></li>
                <li><a href="#" title="Dark Blue" class="switch-skin darkblue" data-skin="assets/css/skins/darkblue.css">Dark Blue</a></li>
                <li><a href="#" title="Dark Brown" class="switch-skin darkbrown" data-skin="assets/css/skins/darkbrown.css">Dark Brown</a></li>
                <li><a href="#" title="Light Green" class="switch-skin lightgreen" data-skin="assets/css/skins/lightgreen.css">Light Green</a></li>
                <li><a href="#" title="Orange" class="switch-skin orange" data-skin="assets/css/skins/orange.css">Orange</a></li>
                <li><a href="#" title="Red" class="switch-skin red" data-skin="assets/css/skins/red.css">Red</a></li>
                <li><a href="#" title="Teal" class="switch-skin teal" data-skin="assets/css/skins/teal.css">Teal</a></li>
                <li><a href="#" title="Yellow" class="switch-skin yellow" data-skin="assets/css/skins/yellow.css">Yellow</a></li>
            </ul>
            <div id="transparent-control"></div>
            <button type="button" class="switch-skin-full fulldark" data-skin="assets/css/skins/fulldark.css">Full Dark</button>
            <button type="button" class="switch-skin-full fullbright" data-skin="assets/css/skins/fullbright.css">Full Bright</button>
        </section>
        <p><a href="#" title="Reset Style" class="del-reset-style">Reset Style</a></p>
        <a href="https://www.themeineed.com/downloads/kingadmin-responsive-admin-dashboard/" class="btn-buy btn-block">BUY TEMPLATE</a>
    </form>
    <script type="text/javascript">
        var currentFilename = window.location.pathname.split('http://demo.thedevelovers.com/').pop();
        if (currentFilename == '') currentFilename = 'index-2.html';

        var arrHasTransparent = ['index.html', 'index-dashboard-v2.html', 'charts-statistics-interactive.html', 'charts-statistics-real-time.html',
            'charts-statistics.html', 'components-maps.html', 'components-tree-view.html', 'page-file-manager.html'
        ];

        var hasTransparent = false;

        arrHasTransparent.forEach(function(filename) {
            if (filename == currentFilename) {
                hasTransparent = true;
                return;
            }
        });

        if (hasTransparent) {
            document.getElementById("transparent-control").innerHTML = '<p><em>There is specific transparent version for this page, check <span class="important">&larr; left</span> navigation menu</em></p><br>';
        } else {
            document.getElementById("transparent-control").innerHTML = '<button type="button" class="switch-skin-full transparent" data-skin="assets/css/skins/transparent.css">Transparent</button>';
        }
    </script>
</div>
<!-- END STYLE SWITCHER -->
