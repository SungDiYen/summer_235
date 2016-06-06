
       		<div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                    	{foreach from = $UserAuthMenu item = menu name=UserMenu}
                            <li>
                                <a class="nav_list box_title {$menu.title}" href="{$menu.link}" target="{$menu.target}">{$menu.name}<span class="arrow_down pngbg"></span>
                                {if $menu.sub|count > 0}
                                <span class="fa arrow"></span>
                                {/if}
                                </a>
                                {if $menu.sub|count > 0}
                                <ul class="nav nav-second-level collapse {if $menu.title==$_Title}in{/if}" style="height: auto;">
                                    {foreach from = $menu.sub item = sub key = subkey name=subMenu}
                                        {if $sub.hidden == false}
                                            <li><a href="{$sub.link}" target="{$sub.target}">{$sub.name}</a></li>
                                        {/if}
                                    {/foreach}
                                </ul>
                                {/if}
                            </li>
                       {/foreach}
                        
                       
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>