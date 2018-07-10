<?php
	class Custom_Walker_Naw_Menu extends Walker_Nav_Menu {

		// add classes to ul sub-menus
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$output .= '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="menu-/posts">';
		}

		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$output .= '</div></li>';
		}

		// add main/sub classes to li's and links
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
//			$locations = get_nav_menu_locations();
//			$menu = wp_get_nav_menu_object( $locations[ 'primary' ] ); // получаем объект меню
//			$menu_items = wp_get_nav_menu_items( $menu );

			$html = '<li class="nav-item';
			if ( $args->walker->has_children ) {
				$html .= ' dropdown" itemprop="name">';
				$html .= '<a class="nav-link dropdown-toggle"';
				$html .= 'href="%s" ';
				$html .= 'data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
				$html .= '%s</a>';
			} elseif ( $item->menu_item_parent != 0 ) {
				$count_posts = wp_count_posts();
				$published_posts = $count_posts->publish;

				$cnt="";
				switch ($item->title){
					case 'Новости':
						$idObj = get_category_by_slug('news');
						$id = $idObj->term_id;
						$cnt=get_category($id)->category_count;

						break;
					case 'Красота и стиль':
						$idObj = get_category_by_slug('beauty');
						$id = $idObj->term_id;
						$cnt=get_category($id)->category_count;

						break;
					case 'Инструкции':
						$idObj = get_category_by_slug('instructions');
						$id = $idObj->term_id;
						$cnt=get_category($id)->category_count;

						break;
				}

				$html = '<a class="dropdown-item" itemprop="url" href="' . $item->url . '"';
				$html .= 'title="%s">';
				if ( $item->title == "Все статьи сайта" ) {
				$html .= '<span itemprop="name">%s</span> <span class="tag tag-warning">'.
				            $published_posts  	. '</span></a>';}
				else{
					$html .= '<span itemprop="name">%s</span> <span class="tag tag-warning">'.
					         $cnt  	. '</span></a>';
				}

			} else {
				if ( $item->title == "Поиск по сайту" ) {
					$html .= '  dropdown dropdown-search open">';
					$html .= '<a class= "btn btn-outline-secondary pink"';
				} else {
					$html .= '" itemprop="name">';
				}

				if ( $item->title == "Регистрация" ) {
					$html .= '<a class= "btn btn-outline-secondary pink"';
					$html .= ' itemprop="url" href="' . $item->url . '"';
				} else {
					if ( $item->title == "Поиск по сайту" ) {
						$html .= '
						<a class="nav-link" href="#" id="menu-search" data-toggle="dropdown" 
						aria-haspopup="true" aria-expanded="true">
			            <i class="fa fa-search hidden-lg-down" aria-hidden="true"></i>
			            <span class="hidden-xl-up">' . $item->title . '</span>
			            </a>';
					} else {
						$html .= '<a class="nav-link"';
						$html .= ' itemprop="url" href="' . $item->url . '"';
					}

				}


				if ( $item->title == "Регистрация" ) {
					$html .= ' title="' . $item->title . '"><b>' . $item->title . '</b></a>';
				} else {
					if ( $item->title == "Поиск по сайту" ) {
						$html .= '
					 <div class="dropdown-menu dropdown-menu-right clearfix pl-1 pt-1 pr-1" aria-labelledby="menu-search">
              <div class="nowrap d-block text-xs-center">
                <form class="form-inline">
                  <input class="form-control mb-1" type="search" id="term" name="s" placeholder="Поиск по сайту" value="" autocomplete="off" required="">
                  <input type="hidden" id="whatSearch" name="whatSearch" value="all">
                  <button class="btn btn-secondary mb-1" type="submit">Найти</button>
                <input type="hidden" name="IREFERRER" value="direct"><input type="hidden" name="LREFERRER" value="direct"><input type="hidden" name="ILANDPAGE" value="https%3A//avon.org.ua/"><input type="hidden" name="VISITS" value="8"></form>
              </div>
            </div>
					';
					} else {
						$html .= ' title="' . $item->title . '">' . $item->title . '</a>';

					}
				}
			}
			$output .= sprintf( $html, $item->url, $item->title, $item->title );

		}

		function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			if ( $args->walker->has_children || $item->menu_item_parent != 0 ) {
			} else {
				$output .= '</li>';
			}
		}
	}


?>