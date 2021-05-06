<?php
// Programs
// Performances
// Presentations
// Collaborators
// About Us

// Programs
//     Theater Group
//     Exhibits
//     In the Works
// Performances
//     FIRST
//     Muskrat
//     Water
// Presentations
//     FIRST Premier
//     Gala Performance
//     Historical Gathering
//     Workshops
//     Powwows
// Collaborators
//     Artistic Collaborators
//     Advisors
//     Links
// About Us
//     Our Story
//     Kiinwi Dabaadjmowin Mural
//     Mississaugas of the Credit First Nation
//     Funders
//     Donors
//     Volunteers
//     Board of Directors

class Banner
{
    public const PAGE_HOME = "homePage";
    public const PAGE_PROGRAMS = "programs";
    public const PAGE_PERFORMANCES = "performances";
    public const PAGE_PRESENTATIONS = "presentations";
    public const PAGE_COLLABORATORS = "collaborators";
    public const PAGE_ABOUT_US = "aboutUs";

    public const BANNER_IMG_PREFIX = "banner-img-";
    
    private const BANNER_TEXT = array (
        self::PAGE_HOME => '<span class="d-block">The</span><span class="d-block">Harmony</span><span>Collaboration</span>',
        self::PAGE_PROGRAMS => '<span class="d-block">Programs</span>',
        self::PAGE_PERFORMANCES => '<span class="d-block">Performances</span>',
        self::PAGE_PRESENTATIONS => '<span class="d-block">Presentations</span>',
        self::PAGE_COLLABORATORS => '<span class="d-block">Collaborators</span>',
        self::PAGE_ABOUT_US => '<span class="d-block">About Us</span>',
    );

    public $imageClass;
    public $bannerText;

    // $page: one of the PAGE_X constants.
    public function __construct( $page )
    {
        $this->imageClass = self::BANNER_IMG_PREFIX . $page;
        $this->bannerText = self::BANNER_TEXT[ $page ];
    }
}

function getHeader( $page )
{
    echo '<header class="bg-lb">';
    include "mainNav.php";

    $banner = new Banner( $page );

    echo 
    "<div class=\"jumbotron-fluid {$banner->imageClass}\">
        <div class=\"container-fluid\">
            <h2 class=\"banner\">{$banner->bannerText}</h1>
        </div>
    </div>";

    echo '</header>';
}
?>

