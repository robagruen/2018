<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 *
 * Template Name: Front Page 2018
 *
 */

get_header(); ?>

<div id="primary" class="content-area content">
	<main id="main" class="site-main" role="main">
        <div class="contentSection" id="aboutMeSection">
            <h1 class="title">About Me</h1>
            <div id="aboutMeContentContainer">
                <div class="aboutMeContent" id="description">
                    <p>Hello visitor of my web page!</p>
                    <p>My name is Rob and I'm a front end developer.  I do UI design, UX development and prototyping, WordPress development, and mobile development.</p>
                    <p>I work on websites and progressive web applications for various startups / businesses in Cincinnati.  I work on the planning phase of creating basic wireframes to designing the user interface while keeping in mind the best user experience practices. Let's build something together!</p>
                    <div style="width: 100%; margin: auto; padding-top: 15px;">
                        <a href="https://www.linkedin.com/in/robagruen/" style="margin-left: 35%;"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://github.com/robagruen" style="margin-right: 35%; float: right;"><i class="fa fa-github" aria-hidden="true"></i></a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="aboutMeContent" id="nameTitle">
                    <img src="http://whatacool.website/wp-content/uploads/2018/10/FullSizeRender.jpeg" id="pictureOfMe" alt="">
                    <div class="titleContainer">
                        <h2>Rob A. Gruen</h2>
                        <h3>Lead Front End Developer</h3>
                    </div>
                </div>
            </div>
            <div id="resumeBTNContainer">
                <a href="http://whatacool.website/wp-content/uploads/2018/11/resume-late2018.pdf" target="_blank"><button id="resumeBTN"><span>View My Resume</span></button></a>
            </div>
        </div>
        <div class="contentSection" id="skillsSection">
            <h1 class="title">Skills</h1>
            <div id="skillCardContainer">
                <div class="skillCard" id="sc01" onclick="toggleNeon(this);">
                    <h4>Languages</h4>
                    <p>Knowledgable in HTML, CSS, JavaScript, and PHP with ability to create mobile-first, responsive web pages.</p>
                    <div class="iconContainer">
                        <div style="width: 50%; text-align: center;">
                            <svg width="75px" viewBox="0 0 298 420" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page 1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Group">
                                        <path d="M27.383,386.266 L0.313,82.646 L297.763,82.646 L270.665,386.217 L148.856,419.986 L27.383,386.266 Z M27.383,386.266" id="Shape" fill="#E44F26"></path>
                                        <path d="M149.038,394.175 L247.465,366.887 L270.623,107.471 L149.038,107.471 L149.038,394.175 Z M149.038,394.175" id="Shape" fill="#F1662A"></path>
                                        <path d="M149.038,220.08 L99.763,220.08 L96.359,181.948 L149.038,181.948 L149.038,144.709 L148.909,144.709 L55.663,144.709 L56.555,154.7 L65.707,257.316 L149.038,257.316 L149.038,220.08 Z M149.038,220.08" id="Shape" fill="#EBEBEB"></path>
                                        <path d="M149.038,316.788 L148.875,316.834 L107.403,305.635 L104.751,275.937 L84.6,275.937 L67.371,275.937 L72.588,334.404 L148.866,355.58 L149.038,355.532 L149.038,316.788 Z M149.038,316.788" id="Shape" fill="#EBEBEB"></path>
                                        <path d="M27.988,0.135 L46.912,0.135 L46.912,18.831 L64.223,18.831 L64.223,0.135 L83.148,0.135 L83.148,56.753 L64.224,56.753 L64.224,37.795 L46.914,37.795 L46.914,56.753 L27.988,56.753 L27.988,0.135 L27.988,0.135 Z M27.988,0.135" id="Shape" fill="#010101"></path>
                                        <path d="M108.032,18.91 L91.372,18.91 L91.372,0.135 L143.624,0.135 L143.624,18.91 L126.957,18.91 L126.957,56.753 L108.033,56.753 L108.033,18.91 L108.032,18.91 L108.032,18.91 Z M108.032,18.91" id="Shape" fill="#010101"></path>
                                        <path d="M151.917,0.135 L171.65,0.135 L183.787,20.029 L195.914,0.135 L215.653,0.135 L215.653,56.753 L196.807,56.753 L196.807,28.69 L183.786,48.82 L183.461,48.82 L170.433,28.69 L170.433,56.753 L151.916,56.753 L151.916,0.135 L151.917,0.135 Z M151.917,0.135" id="Shape" fill="#010101"></path>
                                        <path d="M225.071,0.135 L244,0.135 L244,38.038 L270.612,38.038 L270.612,56.752 L225.07,56.752 L225.07,0.135 L225.071,0.135 Z M225.071,0.135" id="Shape" fill="#010101"></path>
                                        <path d="M148.909,220.08 L148.909,257.316 L194.763,257.316 L190.441,305.61 L148.909,316.82 L148.909,355.562 L225.249,334.404 L225.808,328.114 L234.559,230.079 L235.467,220.08 L225.433,220.08 L148.909,220.08 Z M148.909,220.08" id="Shape" fill="#FFFFFF"></path>
                                        <path d="M148.909,144.709 L148.909,167.837 L148.909,181.856 L148.909,181.948 L238.736,181.948 L238.856,181.948 L239.603,173.578 L241.299,154.7 L242.19,144.709 L148.909,144.709 Z M148.909,144.709" id="Shape" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div style="width: 50%; text-align: center;">
                            <svg width="75px" viewBox="0 0 298 420" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page 1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Layer_1">
                                        <path d="M233.164,15.681 L208.476,15.681 L234.15,43.54 L234.15,56.801 L181.268,56.801 L181.268,41.275 L206.937,41.275 L181.268,13.415 L181.268,0.135 L233.164,0.135 L233.164,15.681 L233.164,15.681 Z M170.786,15.681 L146.098,15.681 L171.771,43.54 L171.771,56.801 L118.889,56.801 L118.889,41.275 L144.561,41.275 L118.889,13.415 L118.889,0.135 L170.786,0.135 L170.786,15.681 L170.786,15.681 Z M109.018,16.312 L82.378,16.312 L82.378,40.625 L109.018,40.625 L109.018,56.801 L63.444,56.801 L63.444,0.135 L109.018,0.135 L109.018,16.312 L109.018,16.312 Z M109.018,16.312" id="Shape" fill="#131313"></path>
                                        <path d="M27.142,386.29 L0.071,82.67 L297.521,82.67 L270.425,386.241 L148.614,420.011 L27.142,386.29 Z M27.142,386.29" id="Shape" fill="#1572B6"></path>
                                        <path d="M148.798,394.199 L247.225,366.911 L270.382,107.496 L148.798,107.496 L148.798,394.199 Z M148.798,394.199" id="Shape" fill="#33A9DC"></path>
                                        <g id="Group" transform="translate(55.000000, 142.000000)">
                                            <path d="M93.797,75.496 L143.072,75.496 L146.475,37.364 L93.797,37.364 L93.797,0.125 L93.926,0.125 L187.172,0.125 L186.279,10.116 L177.127,112.732 L93.797,112.732 L93.797,75.496 Z M93.797,75.496" id="Shape" fill="#FFFFFF"></path>
                                            <path d="M94.02,172.204 L93.857,172.25 L52.385,161.051 L49.733,131.353 L29.582,131.353 L12.354,131.353 L17.57,189.82 L93.848,210.996 L94.02,210.948 L94.02,172.204 Z M94.02,172.204" id="Shape" fill="#EBEBEB"></path>
                                            <path d="M139.907,111.156 L135.423,161.026 L93.891,172.236 L93.891,210.978 L170.23,189.82 L170.79,183.53 L177.268,111.156 L139.907,111.156 Z M139.907,111.156" id="Shape" fill="#FFFFFF"></path>
                                            <path d="M93.926,0.125 L93.926,23.253 L93.926,37.272 L93.926,37.364 L4.098,37.364 L3.979,37.364 L3.232,28.994 L1.535,10.116 L0.645,0.125 L93.926,0.125 Z M93.926,0.125" id="Shape" fill="#EBEBEB"></path>
                                            <path d="M93.797,75.5 L93.797,98.629 L93.797,112.646 L93.797,112.738 L52.969,112.738 L52.85,112.738 L52.104,104.369 L50.406,85.491 L49.516,75.5 L93.797,75.5 Z M93.797,75.5" id="Shape" fill="#EBEBEB"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="iconContainer">
                        <div style="width: 50%; text-align: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 630" width="75px" id="jsLogo">
                                <rect width="630" height="630" fill="#f7df1e"/>
                                <path d="m423.2 492.19c12.69 20.72 29.2 35.95 58.4 35.95 24.53 0 40.2-12.26 40.2-29.2 0-20.3-16.1-27.49-43.1-39.3l-14.8-6.35c-42.72-18.2-71.1-41-71.1-89.2 0-44.4 33.83-78.2 86.7-78.2 37.64 0 64.7 13.1 84.2 47.4l-46.1 29.6c-10.15-18.2-21.1-25.37-38.1-25.37-17.34 0-28.33 11-28.33 25.37 0 17.76 11 24.95 36.4 35.95l14.8 6.34c50.3 21.57 78.7 43.56 78.7 93 0 53.3-41.87 82.5-98.1 82.5-54.98 0-90.5-26.2-107.88-60.54zm-209.13 5.13c9.3 16.5 17.76 30.45 38.1 30.45 19.45 0 31.72-7.61 31.72-37.2v-201.3h59.2v202.1c0 61.3-35.94 89.2-88.4 89.2-47.4 0-74.85-24.53-88.81-54.075z"/>
                            </svg>
                        </div>
                        <div id="phpDiv" style="width: 50%; text-align: center;">
                            <svg height="383.5975" id="svg3430" version="1.1" viewBox="0 0 711.20123 383.5975" width="711.20123" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg">
                                <defs id="defs3434">
                                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3444">
                                        <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3446"/>
                                    </clipPath>
                                    <radialGradient cx="0" cy="0" fx="0" fy="0" gradientTransform="matrix(363.05789,0,0,-363.05789,177.52002,256.30713)" gradientUnits="userSpaceOnUse" id="radialGradient3452" r="1" spreadMethod="pad">
                                        <stop id="stop3454" offset="0" style="stop-opacity:1;stop-color:#aeb2d5"/>
                                        <stop id="stop3456" offset="0.3" style="stop-opacity:1;stop-color:#aeb2d5"/>
                                        <stop id="stop3458" offset="0.75" style="stop-opacity:1;stop-color:#484c89"/>
                                        <stop id="stop3460" offset="1" style="stop-opacity:1;stop-color:#484c89"/>
                                    </radialGradient>
                                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3468">
                                        <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3470"/>
                                    </clipPath>
                                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3480">
                                        <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3482"/>
                                    </clipPath>
                                </defs>
                                <g id="g3438" transform="matrix(1.25,0,0,-1.25,-4.4,394.29875)">
                                    <g id="g3440">
                                        <g clip-path="url(#clipPath3444)" id="g3442">
                                            <g id="g3448">
                                                <g id="g3450">
                                                    <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3462" style="fill:url(#radialGradient3452);stroke:none"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="g3464">
                                        <g clip-path="url(#clipPath3468)" id="g3466">
                                            <g id="g3472" transform="translate(288,27.3594)">
                                                <path d="M 0,0 C 146.729,0 265.68,60.281 265.68,134.641 265.68,209 146.729,269.282 0,269.282 -146.729,269.282 -265.68,209 -265.68,134.641 -265.68,60.281 -146.729,0 0,0" id="path3474" style="fill:#777bb3;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="g3476">
                                        <g clip-path="url(#clipPath3480)" id="g3478">
                                            <g id="g3484" transform="translate(161.7344,145.3066)">
                                                <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.341 9.532,11.862 11.573,22.353 1.903,9.806 1.178,16.653 -2.154,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.063,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 L -37.679,81.573 C -37.405,82.982 -36.17,84 -34.734,84 L 26.32,84 C 45.508,84 59.79,78.79 68.767,68.513 77.792,58.182 80.579,43.741 77.05,25.592 75.614,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.722,0 -7.06,-36.322 c -0.274,-1.41 -1.508,-2.428 -2.944,-2.428 l -31.751,0 z" id="path3486" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                            </g>
                                            <g id="g3488" transform="translate(159.2236,197.3071)">
                                                <path d="m 0,0 16.808,0 c 13.421,0 18.083,-2.945 19.667,-4.7 2.628,-2.914 3.124,-9.058 1.435,-17.767 C 36.012,-32.217 32.494,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.523,-49 0,0 Z m 28.831,35 -61.055,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.873,0 5.342,2.036 5.89,4.855 l 6.588,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.399,7.48 23.354,13.984 5.752,5.292 10.49,11.232 14.08,17.657 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.104 0.697,34.402 -8.969,45.466 C 63.965,29.444 48.923,35 28.831,35 m -45.633,-90 19.313,0 c 12.801,0 22.336,2.411 28.601,7.234 6.266,4.824 10.492,12.875 12.688,24.157 2.101,10.832 1.144,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.802,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.44,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.531,-38.75 -31.75,0 28.328,145.75 61.055,0" id="path3490" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                            </g>
                                            <g id="g3492" transform="translate(311.583,116.3066)">
                                                <path d="m 0,0 c -0.896,0 -1.745,0.4 -2.314,1.092 -0.571,0.691 -0.802,1.6 -0.631,2.48 L 9.586,68.061 C 10.778,74.194 10.484,78.596 8.759,80.456 7.703,81.593 4.531,83.5 -4.848,83.5 L -27.55,83.5 -43.305,2.428 C -43.579,1.018 -44.814,0 -46.25,0 l -31.5,0 c -0.896,0 -1.745,0.4 -2.315,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 l 28.328,145.751 c 0.274,1.409 1.509,2.427 2.945,2.427 l 31.5,0 c 0.896,0 1.745,-0.4 2.315,-1.091 0.57,-0.692 0.801,-1.601 0.63,-2.481 L -21.813,113 2.609,113 c 18.605,0 31.221,-3.28 38.569,-10.028 7.49,-6.884 9.827,-17.891 6.947,-32.719 L 34.945,2.428 C 34.671,1.018 33.437,0 32,0 L 0,0 Z" id="path3494" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                            </g>
                                            <g id="g3496" transform="translate(293.6611,271.0571)">
                                                <path d="m 0,0 -31.5,0 c -2.873,0 -5.342,-2.036 -5.89,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.5,0 c 2.872,0 5.342,2.036 5.89,4.855 l 15.283,78.645 20.229,0 c 9.363,0 11.328,-2 11.407,-2.086 0.568,-0.611 1.315,-3.441 0.082,-9.781 l -12.531,-64.489 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 32,0 c 2.872,0 5.342,2.036 5.89,4.855 l 13.179,67.825 c 3.093,15.921 0.447,27.864 -7.861,35.5 -7.928,7.281 -21.208,10.82 -40.599,10.82 l -20.784,0 6.143,31.605 C 6.231,-5.386 5.77,-3.566 4.63,-2.184 3.49,-0.801 1.792,0 0,0 m 0,-6 -7.531,-38.75 28.062,0 c 17.657,0 29.836,-3.082 36.539,-9.238 6.703,-6.16 8.711,-16.141 6.032,-29.938 l -13.18,-67.824 -32,0 12.531,64.488 c 1.426,7.336 0.902,12.34 -1.574,15.008 -2.477,2.668 -7.746,4.004 -15.805,4.004 l -25.176,0 -16.226,-83.5 -31.5,0 L -31.5,-6 0,-6" id="path3498" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                            </g>
                                            <g id="g3500" transform="translate(409.5498,145.3066)">
                                                <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.34 9.532,11.861 11.574,22.353 1.903,9.806 1.178,16.653 -2.155,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.062,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.802,1.601 -0.631,2.48 L -37.679,81.573 C -37.404,82.982 -36.17,84 -34.733,84 L 26.32,84 C 45.509,84 59.79,78.79 68.768,68.513 77.793,58.183 80.579,43.742 77.051,25.592 75.613,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.723,0 -7.057,-36.322 c -0.275,-1.41 -1.509,-2.428 -2.946,-2.428 l -31.75,0 z" id="path3502" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                            </g>
                                            <g id="g3504" transform="translate(407.0391,197.3071)">
                                                <path d="M 0,0 16.808,0 C 30.229,0 34.891,-2.945 36.475,-4.7 39.104,-7.614 39.6,-13.758 37.91,-22.466 36.012,-32.217 32.493,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.522,-49 0,0 Z m 28.831,35 -61.054,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 L -66.44,-115.606 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.872,0 5.342,2.036 5.89,4.855 l 6.587,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.401,7.481 23.356,13.986 5.752,5.291 10.488,11.23 14.078,17.655 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.105 0.697,34.403 -8.969,45.467 C 63.965,29.444 48.924,35 28.831,35 m -45.632,-90 19.312,0 c 12.801,0 22.336,2.411 28.601,7.234 6.267,4.824 10.492,12.875 12.688,24.157 2.102,10.832 1.145,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.801,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.441,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.53,-38.75 -31.75,0 28.328,145.75 61.054,0" id="path3506" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="skillCard" id="sc02" onclick="toggleNeon(this);">
                    <!-- Neon lights css effect -->
                    <h4>UX Design / Prototyping</h4>
                    <p>Proficient in using industry standard tools such as Sketch or InVision Studio to mockup wireframes and create animated prototypes.</p>
                    <div style="width:75px; margin:auto; height:120px;">
                        <svg width="75px" height="75px" viewBox="0 0 494 447" version="1.1">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Sketch-Flat-Logo" transform="translate(-9.000000, -28.000000)">
                                    <g id="Group" transform="translate(9.000000, 28.000000)">
                                        <g id="Base" fill="#FFAE00">
                                            <polygon id="Polygon" transform="translate(247.000000, 223.500000) rotate(-180.000000) translate(-247.000000, -223.500000) " points="247 5.68434189e-14 494 287 387 432 247 447 107 432 -2.84217094e-13 287"></polygon>
                                        </g>
                                        <g id="Bottom-Back" transform="translate(0.000000, 160.000000)" fill="#EC6C00">
                                            <polygon id="Polygon" transform="translate(247.000000, 143.500000) rotate(-180.000000) translate(-247.000000, -143.500000) " points="247 1.13686838e-13 494 287 -5.68434189e-14 287"></polygon>
                                        </g>
                                        <g id="Bottom-Mid" transform="translate(100.000000, 160.000000)" fill="#FFAE00">
                                            <polygon id="Polygon" transform="translate(147.000000, 143.500000) rotate(-180.000000) translate(-147.000000, -143.500000) " points="147 0 294 287 2.84217094e-13 287"></polygon>
                                        </g>
                                        <g id="Top-Mid" transform="translate(100.000000, 0.000000)" fill="#FFEFB4">
                                            <polygon id="Polygon" transform="translate(147.000000, 80.000000) rotate(-180.000000) translate(-147.000000, -80.000000) " points="147 160 294 2.70983236e-12 5.68434189e-14 -5.68434189e-14"></polygon>
                                        </g>
                                        <g id="Top-Side-Left" transform="translate(0.000000, 15.000000)" fill="#FFAE00">
                                            <polygon id="Polygon" transform="translate(53.500000, 72.500000) rotate(-180.000000) translate(-53.500000, -72.500000) " points="-2.27373675e-13 145 55 72 107 2.72848411e-12 6 5.68434189e-14"></polygon>
                                        </g>
                                        <g id="Top-Side-Right" transform="translate(440.500000, 87.500000) scale(-1, 1) translate(-440.500000, -87.500000) translate(387.000000, 15.000000)" fill="#FFAE00">
                                            <polygon id="Polygon" transform="translate(53.500000, 72.500000) rotate(-180.000000) translate(-53.500000, -72.500000) " points="-2.27373675e-13 145 55 72 107 2.72848411e-12 6 5.68434189e-14"></polygon>
                                        </g>
                                        <g id="Top-Left" transform="translate(100.000000, 0.000000)" fill="#FED305">
                                            <polygon id="Polygon" transform="translate(73.500000, 80.000000) rotate(-180.000000) translate(-73.500000, -80.000000) " points="140 145 147 2.95585778e-12 2.27373675e-13 160"></polygon>
                                        </g>
                                        <g id="Top-Right" transform="translate(247.000000, 0.000000)" fill="#FED305">
                                            <polygon id="Polygon" transform="translate(73.500000, 80.000000) scale(-1, 1) rotate(-180.000000) translate(-73.500000, -80.000000) " points="140 145 147 0 -1.42108547e-14 160"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div style="width:75px; margin:auto;">
                        <img src="http://whatacool.website/wp-content/uploads/2018/11/InVision-Studio.png" alt="">
                    </div>
                </div>
                <div class="skillCard" id="sc03" onclick="toggleNeon(this);">
                    <h4>Web Frameworks</h4>
                    <p>Experience from using a variety of popular web frameworks to create scaleable, progressive web applications.</p>
                    <div style="widoth: 75px; margin: auto; text-align: center;">
                        <svg height="75px" width="75px" style="height: 75px; width: 75px; background: rgba(255,255,255,0.5); border-radius: 15px;" version="1.1" id="Layer_2_1_" x="0px" y="0px" viewBox="0 0 841.9 595.3" enable-background="new 0 0 841.9 595.3">
                            <g>
                                <path fill="#61DAFB" d="M666.3,296.5c0-32.5-40.7-63.3-103.1-82.4c14.4-63.6,8-114.2-20.2-130.4c-6.5-3.8-14.1-5.6-22.4-5.6v22.3
                                    c4.6,0,8.3,0.9,11.4,2.6c13.6,7.8,19.5,37.5,14.9,75.7c-1.1,9.4-2.9,19.3-5.1,29.4c-19.6-4.8-41-8.5-63.5-10.9
                                    c-13.5-18.5-27.5-35.3-41.6-50c32.6-30.3,63.2-46.9,84-46.9l0-22.3c0,0,0,0,0,0c-27.5,0-63.5,19.6-99.9,53.6
                                    c-36.4-33.8-72.4-53.2-99.9-53.2v22.3c20.7,0,51.4,16.5,84,46.6c-14,14.7-28,31.4-41.3,49.9c-22.6,2.4-44,6.1-63.6,11
                                    c-2.3-10-4-19.7-5.2-29c-4.7-38.2,1.1-67.9,14.6-75.8c3-1.8,6.9-2.6,11.5-2.6l0-22.3c0,0,0,0,0,0c-8.4,0-16,1.8-22.6,5.6
                                    c-28.1,16.2-34.4,66.7-19.9,130.1c-62.2,19.2-102.7,49.9-102.7,82.3c0,32.5,40.7,63.3,103.1,82.4c-14.4,63.6-8,114.2,20.2,130.4
                                    c6.5,3.8,14.1,5.6,22.5,5.6c27.5,0,63.5-19.6,99.9-53.6c36.4,33.8,72.4,53.2,99.9,53.2c8.4,0,16-1.8,22.6-5.6
                                    c28.1-16.2,34.4-66.7,19.9-130.1C625.8,359.7,666.3,328.9,666.3,296.5z M536.1,229.8c-3.7,12.9-8.3,26.2-13.5,39.5
                                    c-4.1-8-8.4-16-13.1-24c-4.6-8-9.5-15.8-14.4-23.4C509.3,224,523,226.6,536.1,229.8z M490.3,336.3c-7.8,13.5-15.8,26.3-24.1,38.2
                                    c-14.9,1.3-30,2-45.2,2c-15.1,0-30.2-0.7-45-1.9c-8.3-11.9-16.4-24.6-24.2-38c-7.6-13.1-14.5-26.4-20.8-39.8
                                    c6.2-13.4,13.2-26.8,20.7-39.9c7.8-13.5,15.8-26.3,24.1-38.2c14.9-1.3,30-2,45.2-2c15.1,0,30.2,0.7,45,1.9
                                    c8.3,11.9,16.4,24.6,24.2,38c7.6,13.1,14.5,26.4,20.8,39.8C504.7,309.8,497.8,323.2,490.3,336.3z M522.6,323.3
                                    c5.4,13.4,10,26.8,13.8,39.8c-13.1,3.2-26.9,5.9-41.2,8c4.9-7.7,9.8-15.6,14.4-23.7C514.2,339.4,518.5,331.3,522.6,323.3z
                                     M421.2,430c-9.3-9.6-18.6-20.3-27.8-32c9,0.4,18.2,0.7,27.5,0.7c9.4,0,18.7-0.2,27.8-0.7C439.7,409.7,430.4,420.4,421.2,430z
                                     M346.8,371.1c-14.2-2.1-27.9-4.7-41-7.9c3.7-12.9,8.3-26.2,13.5-39.5c4.1,8,8.4,16,13.1,24C337.1,355.7,341.9,363.5,346.8,371.1z
                                     M420.7,163c9.3,9.6,18.6,20.3,27.8,32c-9-0.4-18.2-0.7-27.5-0.7c-9.4,0-18.7,0.2-27.8,0.7C402.2,183.3,411.5,172.6,420.7,163z
                                     M346.7,221.9c-4.9,7.7-9.8,15.6-14.4,23.7c-4.6,8-8.9,16-13,24c-5.4-13.4-10-26.8-13.8-39.8C318.6,226.7,332.4,224,346.7,221.9z
                                     M256.2,347.1c-35.4-15.1-58.3-34.9-58.3-50.6c0-15.7,22.9-35.6,58.3-50.6c8.6-3.7,18-7,27.7-10.1c5.7,19.6,13.2,40,22.5,60.9
                                    c-9.2,20.8-16.6,41.1-22.2,60.6C274.3,354.2,264.9,350.8,256.2,347.1z M310,490c-13.6-7.8-19.5-37.5-14.9-75.7
                                    c1.1-9.4,2.9-19.3,5.1-29.4c19.6,4.8,41,8.5,63.5,10.9c13.5,18.5,27.5,35.3,41.6,50c-32.6,30.3-63.2,46.9-84,46.9
                                    C316.8,492.6,313,491.7,310,490z M547.2,413.8c4.7,38.2-1.1,67.9-14.6,75.8c-3,1.8-6.9,2.6-11.5,2.6c-20.7,0-51.4-16.5-84-46.6
                                    c14-14.7,28-31.4,41.3-49.9c22.6-2.4,44-6.1,63.6-11C544.3,394.8,546.1,404.5,547.2,413.8z M585.7,347.1c-8.6,3.7-18,7-27.7,10.1
                                    c-5.7-19.6-13.2-40-22.5-60.9c9.2-20.8,16.6-41.1,22.2-60.6c9.9,3.1,19.3,6.5,28.1,10.2c35.4,15.1,58.3,34.9,58.3,50.6
                                    C644,312.2,621.1,332.1,585.7,347.1z"/>
                                <polygon fill="#61DAFB" points="320.8,78.4 320.8,78.4 320.8,78.4 	"/>
                                <circle fill="#61DAFB" cx="420.9" cy="296.5" r="45.7"/>
                                <polygon fill="#61DAFB" points="520.5,78.1 520.5,78.1 520.5,78.1 	"/>
                            </g>
                        </svg>
                    </div>
                    <div style="width: 175px; background: rgba(255,255,255,0.5); margin: auto; padding-top: 8px; margin-top: 21px; border-radius: 15px;">
                        <img src="http://whatacool.website/wp-content/uploads/2018/11/Expressjs.png" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
            <!--p style="font-size: 16px;">I'm also skilled in creating animations using CSS.  Clicking on any of the above cards will trigger an animation using pure CSS!</p-->
        </div>
        <div class="contentSection" id="pastWorkSection">
            <h1 class="title">Portfolio</h1>
            <div class="pastProjectRow">
                <div class="pastProjectItem iFrameContainer">
                    <div id="compositesPreview" class="sitePreviewOverlays"></div>
                    <a href="https://composites.coldjet.com" target="_blank" class="portfolioLink"><img src="http://whatacool.website/wp-content/uploads/2018/10/compositesPreview.png" id="compositesImage" alt="" /></a>
                </div>
                <div class="pastProjectItem descriptionContainer">
                    <a href="https://composites.coldjet.com" target="_blank" class="portfolioLink"><h2 class="portfolioSiteTitles">Cold Jet Composites Landing Page</h2></a>
                    <!--a href="https://www.coldjet.com/minisites/composites/en/" target="_blank"><button class="aBTN"><span>Visit Site</span></button></a-->
                </div>
            </div>
            <div class="pastProjectRow pastProjectRowReverse">
                <div class="pastProjectItem descriptionContainer">
                    <a href="https://whalestar.io" target="_blank" class="portfolioLink"><h2 class="portfolioSiteTitles">Whalestar</h2></a>
                    <!--a href="https://whalestar.io" target="_blank"><button class="aBTN"><span>Visit Site</span></button></a-->
                </div>
                <div class="pastProjectItem iFrameContainer iFrameContainerReverse">
                    <a href="https://whalestar.io" target="_blank" class="portfolioLink"><img src="http://whatacool.website/wp-content/uploads/2018/10/whalestarPreview.png" id="whalestarImage" alt="" /></a>
                    <div id="whalestarPreview" class="sitePreviewOverlays"></div>
                </div>
            </div>
        </div>
        <div class="contentSection" id="contactMeSection">
            <form name="contactForm" method="post">
                <h1 class="sectionHeader title">Wow, this guy sounds great!  Let's contact him!</h1>
                <div id="inputContainer">
                    <div class="flexChildInput" id="nameInput">
                        <h4 class="contactLabels">Name</h4>
                        <input id="nameInputField" type="text" name="name" required />
                    </div>
                    <div class="flexChildInput" id="emailInput">
                        <h4 class="contactLabels">Email</h4>
                        <input id="emailInputField" type="text" name="email" required />
                    </div>
                </div>
                <div id="commentsContainer">
                    <h4 class="contactLabels">Comments</h4>
                    <textarea id="commentsTextArea" name="comments" id="" cols="30" style="height: 25vh;" required></textarea>
                </div>
                <input name="action" hidden />
                <div id="submitContainer">
                    <input type="button" value="Submit" onclick="formSubmit();" />
                </div>
                <?php
                    $to = 'rgruen@live.com';
                    $name = filter_var($_POSt['name']);
                    $email = filter_var($_POSt['email']);
                    $comments = filter_var($_POSt['comments']);
                    $headers = $email . " has sent an email!";

                    // TODO Add email functionality here

                    if ($name == "This") {
                        //wp_mail($to, $comments, );
                    }
                ?>
            </form>
        </div>
	</main><!-- #main -->
</div><!-- #primary -->

<div id="mouseCursor" style="background: #f00; position: absolute; z-index: 1000;"></div>

<script>
    function toggleNeon(sc) {
        let cardNumber = sc.id;
        // console.log(cardNumber);
        let skillCard = document.getElementById(cardNumber);
        let neonColors = ['animationPurple', 'animationYellow'];
        if (sc.classList.contains("animationPurple") || sc.classList.contains("animationYellow")) {
            skillCard.classList.remove("animationPurple");
            skillCard.classList.remove("animationYellow");
        }
        else {
            let i = Math.floor((Math.random() * 2));
            // console.log(i);
            skillCard.classList.toggle(neonColors[i]);
        }
    }

    function formSubmit() {
        let name = document.forms["contactForm"]["nameInputField"].value;
        let email = document.forms["contactForm"]["emailInputField"].value;
        let comments = document.forms["contactForm"]["commentsTextArea"].value;
        if (name == "" || email == "" || comments == "") {
            alert("Please fill out each field before submitting.");
        }
        else {
            alert("An email has been sent to Rob.  He will be in contact with you shortly.");
        }
    }
</script>

<?php
get_footer();
