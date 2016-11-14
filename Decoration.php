<?php

class HtmlLinks {
    // методы для работы с любой HTML-ссылкой
}

class LogoutLink extends HtmlLinks {
    protected $_html;
    public function __construct() {
        $this->_html = "<a href="logout.php">Logout</a>";
        }

    public function setHtml($html) {
        $this->_html = $html;
        }

    public function render() {
        echo $this->_html;
        }
}

class LogoutLinkH2Decorator extends HtmlLinks {
    protected $_logout_link;

    public function __construct( $logout_link ) {
        $this->_logout_link = $logout_link;
                $this->setHtml("" . $this->_html . "");
        }
    public function __call( $name, $args ) {
        $this->_logout_link-$name($args[0]);
        }
}

class LogoutLinkUnderlineDecorator extends HtmlLinks {
    protected $_logout_link;
    public function __construct( $logout_link ) {
        $this->_logout_link = $logout_link;
                $this->setHtml("" . $this->_html . "");
        }
    public function __call( $name, $args ) {
        $this->_logout_link-$name($args[0]);
        }
}

class LogoutLinkStrongDecorator extends HtmlLinks {
    protected $_logout_link;
    public function __construct( $logout_link ) {
        $this->_logout_link = $logout_link;
                $this->setHtml("" . $this->_html . "");
        }
    public function __call( $name, $args ) {
        $this->_logout_link-$name($args[0]);
        }
}



$logout_link = new LogoutLink();

if( $is_logged_in ) {
    $logout_link = new LogoutLinkStrongDecorator($logout_link);
}

if( $in_home_page ) {
    $logout_link = new LogoutLinkH2Decorator($logout_link);
} else {
    $logout_link = new LogoutLinkUnderlineDecorator($logout_link);
}
$logout_link->render();
