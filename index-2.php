<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from thepixelcurve.com/html/upstudy/upstudy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:40:12 GMT -->
<head>
    <?php include_once 'head.php'?>
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <?php include_once 'main.php' ?>


        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">

            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.php"><img src="assets/images/logo-white.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->

                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>

            </div>
            <?php include_once 'offcanvas-body.php' ?>
        </div>
        <!-- Offcanvas End -->


        <!-- Hero Start -->
        <div class="upstudy-hero-section-02 section" style="background-image: url(assets/images/bg/hero2-bg.jpg);">
            <div class="image-1">
                <img src="assets/images/hero2-img1.png" alt="">
                <div class="shape-1 parallaxed">
                    <svg id="banner" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                        <g id="bg">
                            <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="60" height="60" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAFUUlEQVRogd1bbYhVRRh+Vlt0tY91pfpRaaxB9qP8KCRI0Y1IA8MIKjLELMo/agVFn4Qk+ydThKggClvRfoR9EFKGUVpmX1JWu4t9XFlICs2tTF3TdffGyDOX12lmzszZe889Zx94YTn3nJn3OTPvO8+8c3YkioExAC4H0ArgMICTBfE7GlMArAdwFEBZ2K8ALioYFy/aAPxkkDStF8DEHHMIggqxdgCDCWS1fQWgsQC8rGgAsCGQqLR1OeQShLtSkNW2mi+sUPgikNwJx/VVRSI7JiJuVwKYZcnc6vkrkjoakQ2fRGinQ3ArgLEkLKGm9OKc8AnC7oiY/cNxfXtSR3kZYYXXIu5tcVw/UCVfMsGoALHRl7B0Lc/a6csAzAWwlPF0FcVEKK71kFEa+g4A+x2/K7l5ThYkzwJwN4APHY78RT08KbC93x3t/AbgH88LuafGPCvYGpBklKPHANwW0N6nEcnrb07zezPiiiWBjpUA7AMwAODmhDavj1iTjwBYkBHX0/gkYjS0qSl7fkK7jwS08z2AKzPiWUGJAuC4xaFTHme/DCD9vuPZPYzXuhQvPjec2cw4vcWTfLT9AKDZ0/ZkAO8B6KGgULuiazLkZsVhQaCba6nSxdvE9WNixAcM0qsD+siTOMJ3wvn7uBl/wyA1yGw6T5DX1pm1w0N9e93i762cyubS08vdjR59idFD7D9zKGWzE8CffHkfGCP4L4DpAMYxwZlx/HbRCINKS4/cZwahpwCcC2CXhWw/gBlV8mE8NfZeAJuY8DLB64KQqkzcyGxsy9LLqtCfWpq+YXvHxVKoBMnsKrSfiCkskieJhvYq9bfA04fS8M4yrqoWPCi2Z78AWAvgvBRO3M83bdvVqP3qoqFxrGCUMaNstov3/Q/TLMmmh1l4QgpnJlA7Sy29KkBdxaDNovCOMjf0J82mx8QDZU5LHXv7uc+NxcMAnuFmoFYl1M5A/d5hStFNCQ90AWiqkdNpYatjbwGw0VLRVPas7KddxFjJsSddmyOyLYasLbPIoEfxUYv/Kq9crBuYwaw2IPaitt3O0vpxPAOaUB997jSS0w7HTD0ja6+0ZFTbQ0vqx7MCTXiQNk/85luqKnE8kwLfvGGPpYRzIksl40Cb8KdHJMXpVFs2ss/rphq5/JjT+CXKxtGW85wXIx1soJNreMTZxRf8I4C3ANyQgvS7YgldwXZc504/yym/TGQ1Hb/viHPXRksD3wY6dTZrxa63Lu2hSMLNLM0mtbvTXP87jBv2UYxrzLQU1boCHFoI4GDgOllm8rkuknSrIXCkqZex3HZg/oJxo1QmzaxemPG9PsGR2RFEpe1NIWdbKHC+plhSYTPft9c3q/3zeX0yp0PZKICfCqgWuoryIabC5YJI0tF4VThyRAj/XouDTwY0btvsx9jmWhNu8uxb5cg+HtieGSax1ldjvqcx11JVLHMj0cG9bigmcrlwEe33/KYKfYeyIKwwlYv3HFYhdT0qDRYbREKPT5S9nBXhasMs6oWYSpCXFJWwb3mybU4GWOotNF4RhFzSr8zqhe84tYGhtiirg++0UCvAmyIh2cgrTX21p/3bjVOOj6nzcwulnj6yjGo3i4fWQhvxtCPjP5dnwgqXMvOrDHxnxOe/ZraXWX9WjX2uG9Y5SJdiK6G5Oop0YKxHC7SySOGL/8LhgYSvd8o8mB8WmBooVk5W8fimrpAJy6bzpfWFfPeR9xguidLxCC5PLjTxvkKjIeLTqC1FJ6sxyfFZlGnD6t96bvJ89zUYUZgoFBYypg9Rk6uC3xP8YnfYQsW00uUXpkq4AP4D2h5/PNW9HWwAAAAASUVORK5CYII=" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="image-2">
                <img src="assets/images/hero2-img2.png" alt="">
                <div class="shape-2 parallaxed">
                    <svg id="banner" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210" height="162" viewBox="0 0 210 162">
                        <g id="bg">
                            <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="210" height="162" xlink:href="data:img/png;base64,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" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="shape-3">
                <svg id="banner" xmlns="http://www.w3.org/2000/svg" width="76" height="72" viewBox="0 0 76 72">
                    <g id="bg">
                        <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="76" height="72" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAABICAYAAABcBhM9AAAIxUlEQVR4nN2ce7DVVRXHP/fce716E5IaiNABganoKuYDLUZNx3SKQoKEfOQLQkuzMjUTmh7WTOqIKWSSUjOajzSHzNDSSPJBQT4C8oVFgRYRaJHKG663WfbdzJrNPpdzzj2P3/19/+Hu3+P81u/L3muv/V1r/5omjt1MjtAMvA/4IHA48C7grcB+wB7AS8BzgL30auBFYAnwBLCpFBpacsBVAfgo8EngGGBwkes2AIOAYYlzncDtwAzgeWBHsYf15h5mL38ecAYwJHH+ZeAC4K9qPwv0A94CbARGAh8CTgKGu/v+AExRT9wFvZGwISLqbOAd0bk/AUuBHwArRNruYEP2FOD7GtKG14FLgTnqfTuRtSHZDgwA1qnt/Yr5oM8AV6iXeKwCvgH8uIJnvgrcCDwD3AP0B/oAs2XLt/zFhYpfrfo4B1gELJNzfq97wqHAXcAsR1aXhs/ngREVkuXxO+D9ej7qWZcBX/YXZYGw4XLaNgQOAuYBo4Cn1Ku+p7/Hu3s2ahh9ALge2FolW1YCo4HLNTz3Aq4EjgwXNNKHFeSUvw30Bd4AJmpYGPYF7leY4HGzyC3FP1WKVvXygbp/qXp5V6N6mBn0MDBTZN2g2CmQ9RFN756s34jQyTUmy7AduMa1D1avb8iQnKIp/mj5oanAF+RDDJeoZ/Vx99isdwIwt452XqshGnA1dSbMZsBPAD9SBG7GjFO7Uz7juzIs2LUFmAacX0c7A8ymP7u2BcWH1SusOAK4wwWID6mnvaR2i6bxqe6ev+i+/9bJxhT+Fh0bVY8edhaw0JFl4cHHHVlNioM8WUbugQ0mC4U5fgYeU0vCmhX03SwnbzhZ4cBGtZvk8Ke4++6RY99WQ9tKhcV5be7ajloNyXb1mtPdMVvK/DS6znzTZ117g+KeLJBl+HvU3qcWhO2tkOEwtTfI2c+PrjN14TrXfkRD9dUa2FQpTLVY69asfatNmCkI9wGHqL1Zf6+IrrMZ504NSaRJjc8YWSge8+FNVRffpiL8XqQhp351giyTWO52ZK1VoNpoB18Mm+RiDG3Vcvoj1EsCWS9rGF4fXdcsH9Vf7a0KWteRXTzpLFtejR42RHFVP7U3aJmzPHGtRfHnuvbliYkgS2jWiiTglz3tYQPl4Ae5Y9OLkGUPn+DaSxRSZBmjIu2toyeEvV1rvv3dsUslx6Rwm/Qm5ExPy6CTj7F/1H6xUsJMJ/qJJI+AeUoipDBUYUTAjCK9MGuIEypPV0rYdVIPAhaKkK4i11/jFtQ2e369F5CFiyUDFlRC2OmR435FUfyWItcPjNTSW7tLY2UIBSm6Af+yEKlcwg6RNuUx2aWyUhgahQ0HuLVlljE4St9ZjLm9HMIsdpoXzRqzFNl3B9OUfu3Oj1fO7yJNHFnFKZFdb75DqZp+k5Yy3nFfJXGvmN/yaNci+/woaYpiOAtNHisnZV9jNOs/9d16zCa5ltdLJcxSYDe59nbVLizr5p5iOFhZZzPgTKXu2/Wb61XvsFKZokel7dc7/BippPA2KRZ3q3OUtJYcGqkKKBdYCVkoA7NUfwc5eoQWuR8G3mkBopSLE5W8rTdh4/TvHhoRq8KJUnrYr7Q4Dlis3F1e0SqCwuplk1J+b4oDu3P6p0Zk7VCEnmecFC31bvNKSneEmTT7tejY3Cj1lEd8yb2TuYKL/Tt2R9i5UX2DqRAX5ZysY5WpClik996JYoRZl7wwOmYa/T9rZmo24EeUDcOvxlYVI2xaVKm3JUqd5xG2bjzOvdfTwB9LIWwfVfV5/BBYk3PCLo7aV6UuShE2XVV5HrOrbl62MCxaCj0orW8XxIT1i3KJSLpJ1nvmBE3KM4SkTFfKdwXEhJ2hSNsj773LVhSTXHuulmVJ+Ei/SZrPAHfhK6pxr1aFX9awp8jpkF1dCqVeKGan72H7RmShwpG8koWU3w7XntkdWUSEfTpx/s7q2ZY5HBEV/D4RFInuEAjrq9nR4zVFunlEu6Ryr9Zc2Y3MvhOBsKMkZXgsiov6c4QrnDiItL6flfJ6gbBUSeQuUW5OMEblCQGrylkjF6T/HJs4V6lAmGXYGvkWZ996EbixVJsL2kwQb0WxvTa/yBlZ7aqG7O+OfafchHKLtPkYq1XblSfMcMnnbZK+y95u0yLBP0ZWa7UqxYXaARfwuHpb2Sgk0l7kTJmYHElTayLZvSwUokg3IC9C4WhF7yEaWKaNViU7+Rgt2hQVozfUPuwObYqtQo3qGqXx1vbkRwtaQ8YoJZudZXSotnags/FjPSUrEJaqL/1PLybrROVO91P7cVUSLqnGj7cUyX7vWY0fbwCOVB5xs95rsbSuf1fLFOth/0gcPy5xLMtoUvnCQgkJA1TecHw1yQqEPZ84frh2dPQG7C0ZapZs3aHq7OlFJrQeE5ZaMzZHJZlZxUjV0YcyrK3aAPbNWtlbUJFcChMzTtZUOfT3uGPTSpVpKkVBi8944xRylvGHNLKANjn2OW5yekBfObm21vaFCPiuxDmTfb6SKar+vx60de6n3LGf6zMOC+phQCDsjiLi/wUqdms0jtFXBW5wvWq+gtEJ9Qy0A2Gbi/SmVpHZljhXDwyX9v6whlyAzYpjbe9PvQ3yWaN7E6WZqNT8JpcZrgeGKaG63GXiO1VrOkG1sQ3ZtRtH+Zco6IurDM9UL/xcjRMjJiF/Ua4g7FHcpl4+09XGNgwxYZ0iZ7u+BuBhCuVgOdz1VSbpVMV9oxWpBzykDV+ZScikqnc6tRVmuojzGCPjJyXuKwd95LDna2k2Q9JLIOu3+hjI8VnLXu2uivoAFaMcnTi3QH7mxhKH6aFy1BMUbO4VnX9DWwcXZznjXurGhhNUh3BU4tw6LXpXSKltVdnUIH2so1UbFM5LuIAu7QC5RRsJnkz8fqZQ7uewhmtYTtI25XKwROUHb9OHiVbqQ42rs06SR0++H2ZDyoaWbYWxIWu7bW1ms/oy63E2TE07t0/lWdBppVQ249nWmN4J4H9mDMuL50H69gAAAABJRU5ErkJggg==" />
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-9">
                        <!-- Hero Content Start -->
                        <div class="hero-content text-center">
                            <p class="text" data-aos="fade-up" data-aos-delay="800"><img src="assets/images/energy.png" alt=""> Learn From 20,000+ Powerful Courses</p>
                            <div class="section-title" data-aos="fade-up" data-aos-delay="700">
                                <h2 class="title"><span>Learn</span> something new today</h2>
                            </div>
                            <div class="hero-form" data-aos="fade-up" data-aos-delay="900">
                                <form action="#">
                                    <input type="text" placeholder="What do you want to learn?">
                                    <button class="search" type="submit"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                </div>

                <div class="upstudy-counter-wrap">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <!-- Counter Item Start -->
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <img src="assets/images/counter-5.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title">
                                        <sapn class="counter">24</sapn>k+
                                    </h3>
                                    <p>Total Students Enrolled</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Counter Item Start -->
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <img src="assets/images/counter-6.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title">
                                        <sapn class="counter">3.5</sapn>M+
                                    </h3>
                                    <p>Total Video Lessons</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Counter Item Start -->
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <img src="assets/images/counter-7.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title">
                                        <sapn class="counter">2.5</sapn>k+
                                    </h3>
                                    <p>Daily live Classes</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Hero End -->

        <!-- Courses Start -->
        <div class="section section-padding-03">
            <div class="container">

                <!-- Course Header Start -->
                <div class="course-header">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"><span>Popular</span> Courses</h2>
                    </div>
                    <!-- Section Title End -->

                    <div class="tab-menu">
                        <ul class="nav justify-content-center justify-content-lg-start">
                            <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Javascript</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab2">Python</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab3">Web Development</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab4">Art & Design</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab5">Business</button></li>
                        </ul>
                    </div>
                </div>
                <!-- Course Header End -->

                <!-- Courses Wrapper Start -->
                <div class="courses-wrapper">

                    <!-- Courses Tab Start -->
                    <div class="courses-tab">

                        <!-- Courses Tab Content Start -->
                        <div class="tab-content courses-tab-content">
                            <div class="tab-pane fade show active" id="tab1">

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-2.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$49</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Learn PHP Programming From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-3.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$25</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Build A Full Web Chat App From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Mike Hussy</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-4.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-5.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$59</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete JavaScript Course for Beginner</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-6.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Daziy Millar</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-7.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$29</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete Web Developer Course</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Rosy Janner</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-8.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab2">

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-2.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$49</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Learn PHP Programming From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-3.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$25</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Build A Full Web Chat App From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Mike Hussy</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-4.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-5.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$59</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete JavaScript Course for Beginner</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-6.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Daziy Millar</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-7.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$29</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete Web Developer Course</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Rosy Janner</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-8.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab3">

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-2.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$49</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Learn PHP Programming From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-3.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$25</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Build A Full Web Chat App From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Mike Hussy</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-4.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-5.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$59</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete JavaScript Course for Beginner</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-6.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Daziy Millar</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-7.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$29</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete Web Developer Course</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Rosy Janner</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-8.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab4">

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-2.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$49</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Learn PHP Programming From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-3.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$25</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Build A Full Web Chat App From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Mike Hussy</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-4.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-5.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$59</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete JavaScript Course for Beginner</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-6.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Daziy Millar</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-7.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$29</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete Web Developer Course</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Rosy Janner</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-8.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab5">

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-2.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$49</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Learn PHP Programming From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-3.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$25</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Build A Full Web Chat App From Scratch</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Mike Hussy</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-4.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-5.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$59</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete JavaScript Course for Beginner</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-6.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Daziy Millar</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-7.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">$29</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">The Complete Web Developer Course</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Rosy Janner</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-8.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Courses Tab Content End -->

                    </div>
                    <!-- Courses Tab End -->

                </div>
                <!-- Courses Wrapper End -->
            </div>
        </div>
        <!-- Courses End -->

       
        <!-- Category Start -->
        <div class="section upstudy-category-section-02 section-padding-02" style="background-image: url(assets/images/bg/cate-bg.png);">
            <div class="shape-1">
                <img src="assets/images/shape/counter-shape1.png" alt="">
            </div>
            <div class="shape-2">
                <img src="assets/images/shape/counter-shape2.png" alt="">
            </div>
            <div class="shape-3">
                <img src="assets/images/shape/counter-shape3.png" alt="">
            </div>
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2 class="title">Choose By <span> Category</span></h2>
                </div>
                <!-- Section Title End -->
                <div class="category-wrap">

                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Category Start -->
                            <div class="category-item-02">
                                <div class="category-img">
                                    <a href="course-grid.html"><img src="assets/images/cat-1.jpg" alt=""></a>
                                </div>
                                <div class="category-content text-center">
                                    <h4 class="title"><a href="course-grid.html">Development</a></h4>
                                </div>
                            </div>
                            <!-- Single Category End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Category Start -->
                            <div class="category-item-02">
                                <div class="category-img">
                                    <a href="course-grid.html"><img src="assets/images/cat-2.jpg" alt=""></a>
                                </div>
                                <div class="category-content text-center">
                                    <h4 class="title"><a href="course-grid.html">Design</a></h4>
                                </div>
                            </div>
                            <!-- Single Category End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Category Start -->
                            <div class="category-item-02">
                                <div class="category-img">
                                    <a href="course-grid.html"><img src="assets/images/cat-3.jpg" alt=""></a>
                                </div>
                                <div class="category-content text-center">
                                    <h4 class="title"><a href="course-grid.html">Photography</a></h4>
                                </div>
                            </div>
                            <!-- Single Category End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Category Start -->
                            <div class="category-item-02">
                                <div class="category-img">
                                    <a href="course-grid.html"><img src="assets/images/cat-4.jpg" alt=""></a>
                                </div>
                                <div class="category-content text-center">
                                    <h4 class="title"><a href="course-grid.html">Mathmatics</a></h4>
                                </div>
                            </div>
                            <!-- Single Category End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!-- Features Start -->
        <div class="section upstudy-features-section section-padding">
            <div class="container">
                <div class="features-wrap">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h2 class="title">Why <span>Involve</span> Edukinit</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="features-content-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <!-- Features Item Start -->
                                <div class="features-item text-center">
                                    <div class="features-img">
                                        <img src="assets/images/feat-1.png" alt="">
                                    </div>
                                    <div class="features-content">
                                        <h3 class="title">Skilled Teachers</h3>
                                        <p>Each one is a native English speaker and is certified by the New York State Education Department.</p>
                                    </div>
                                </div>
                                <!-- Features Item End -->
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- Features Item Start -->
                                <div class="features-item text-center">
                                    <div class="features-img">
                                        <img src="assets/images/feat-2.png" alt="">
                                    </div>
                                    <div class="features-content">
                                        <h3 class="title">Affordabe Courses</h3>
                                        <p>Each one is a native English speaker and is certified by the New York State Education Department.</p>
                                    </div>
                                </div>
                                <!-- Features Item End -->
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- Features Item Start -->
                                <div class="features-item text-center">
                                    <div class="features-img">
                                        <img src="assets/images/feat-3.png" alt="">
                                    </div>
                                    <div class="features-content">
                                        <h3 class="title">Effecient & Flexible</h3>
                                        <p>Each one is a native English speaker and is certified by the New York State Education Department.</p>
                                    </div>
                                </div>
                                <!-- Features Item End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <?php include_once 'footer.php' ?>
        <!-- back to top start -->

       
    </div>

    <!-- JS
    ============================================ -->
    <?php include_once 'script.php' ?>

</body>


<!-- Mirrored from thepixelcurve.com/html/upstudy/upstudy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:40:16 GMT -->
</html>