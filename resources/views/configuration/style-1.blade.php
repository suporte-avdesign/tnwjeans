<div id="switcher" class="">
    <div class="content-switcher">
        <h4>COR RELEVANTE </h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-light').src='img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet'); document.getElementById('logo-light').src='img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blueviolet.png';" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod'); document.getElementById('logo-light').src='img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/goldenrod.png';" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green'); document.getElementById('logo-light').src='img/styleswitcher/logos/green.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/green.png';" title="green" class="color"><img src="img/styleswitcher/green.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta'); document.getElementById('logo-light').src='img/styleswitcher/logos/magenta.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/magenta.png';" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange'); document.getElementById('logo-light').src='img/styleswitcher/logos/orange.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/orange.png';" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple'); document.getElementById('logo-light').src='img/styleswitcher/logos/purple.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/purple.png';" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red'); document.getElementById('logo-light').src='img/styleswitcher/logos/red.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/red.png';" title="red" class="color"><img src="img/styleswitcher/red.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellow.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellow.png';" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellowgreen.png';" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="" width="30" height="30" /></a>
            </li>
        </ul>

        <p>COR CORPO</p>

        <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" @if($home->color_style == 'light') checked="checked" @endif /> Claro</label>
        <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" @if($home->color_style == 'dark') checked="checked" @endif /> Escuro</label>

        <hr />

        <p>ESTILO DE LAYOUT</p>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Largo</label>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Box</label>

        <hr />

        <p class="separator">SEPARATOR <span class="hot">HOT</span></p>
        <span class="info">Select and scroll to see the changes</span>
        <label><input class="separator_switch" type="radio" name="separator_style" id="is_normal" value="normal"  /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/1.jpg" /></label>
        <label><input class="separator_switch" type="radio" name="separator_style" id="is_skew" value="skew" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/2.jpg" /></label>
        <label><input class="separator_switch" type="radio" name="separator_style" id="is_reversed_skew" value="reversed-skew" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/3.jpg" /></label>
        <label><input class="separator_switch" type="radio" name="separator_style" id="is_double_diagonal" value="double-diagonal" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/4.jpg" /></label>
        <label><input class="separator_switch" type="radio" name="separator_style" id="is_big_triangle" value="big-triangle" checked="checked" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/5.jpg" /></label>

        <hr />

        <a href="https://themeforest.net/item/salimo-creative-one-page-template/19128817?ref=celtano" class="custom-button purchase">Purchase</a>
        <div id="hideSwitcher">&times;</div>

    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
