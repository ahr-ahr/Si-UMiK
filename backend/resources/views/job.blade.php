<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href={{ asset('css/style.css') }}>
        <link href="https://fonts.googleapis.com/css2/family=Lato:wght@400;700&display=swap" rel="stylesheet">
        <title>Responsive Job Portal Website</title>
    </head>
    <body>
        
         <div class="sidebar">
            <h1 class="logo">Lokasi lapak UMIK</h1>
            <div class="menus">
                <a href="#"><ion-icon name="home-outline"></ion-icon> Home</a>                
                <a href="#"><ion-icon name="newspaper-outline"></ion-icon> Finds Jobs</a>                
                <a href="#"><ion-icon name="stats-chart-outline"></ion-icon> Performance</a>
                <a href="#"><ion-icon name="bookmarks-outline"></ion-icon> Bookmarks</a>
                <a href="#"><ion-icon name="mail-unread-outline"></ion-icon> Message</a>
                <a href="#"><ion-icon name="settings-outline"></ion-icon> Setting</a>

            </div>
            <div class="profile">
                <img class="profile-img" src="images/profile.jpg">
                <div class="profile-name">
                    <h4>Kemasan Indokertas</h4>
                    <p>PT</p>
                </div>
            </div>
         </div>

         <div class="main">
            <div class="main-header">
                <ion-icon class="menu-bar" name="menu-outline"></ion-icon>
                <div class="search">
                    <input type="text" placeholder="Search your best job here...">
                    <button class="btn-search"><ion-icon name="search-outline"></ion-icon></button>
                </div>
            </div>
            <div class="filter-wrapper">
                <p>Recommendation</p>
                <div class="filter">
                    <button class="btn-filter">lapak stand</button>
                    <button class="btn-filter">lapak ruko</button>
                    <button class="btn-filter">lapak rumah</button>
                    <button class="btn-filter">Data Visualization</button>
                    <button class="btn-filter">CRM Analyst</button>
                </div>
            </div>
            <div class="sort">
                <p>Sort</p>
                <div class="sort-list">
                    <select>
                        <option value="0">All</option>
                        <option value="1">Newest Post</option>
                        <option value="2">Oldest Post</option>
                        <option value="3">Most Relevant</option>
                        <option value="4">Highest Paid</option>
                    </select>
                </div>
            </div>
            <div class="Location">
                <p>Location</p>
                <div class="location-list">
                    <select>
                        <option value="0">All</option>
                        <option value="1">ngaggel</option>
                        <option value="2">perak</option>
                        <option value="3">rangka</option>
                        <option value="4">kapasan</option>
                        <option value="4">demak</option>
                        <option value="4">ampel</option>
                        <option value="4">krembangan</option>
                    </select>
                </div>
            </div>
            <div class="wrapper">
                <div class="card">
                    <div class="card-left blue-bg">
                        <img src="images/Building.svg">
                    </div>
                    <div class="card-center">
                        <h3>rangka</h3>
                        <p class="card-detail">Designer, Programmer</p>
                        <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Jl. Rangkah II No.60</p>
                        <div class="card-sub">
                            <p><ion-icon name="today-outline"></ion-icon> 1 mins ago</p>
                            <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                            <p><ion-icon name="people-outline"></ion-icon> 200 Applicants</p>
                        </div>
                    </div>
                    <div class="card-right">
                        <div class="card-tag">
                            <h5>Division</h5>
                            <a href="#">Programmer</a>
                        </div>
                        <div class="card-salary">
                            <p><b>$350k</b> <span>/ year</span></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-left yellow-bg">
                        <img src="images/Building.svg">
                    </div>
                    <div class="card-center">
                        <h3>ampel</h3>
                        <p class="card-detail">Data Analyst, Product Analyst</p>
                        <p class="card-loc"><ion-icon name="location-outline"></ion-icon> ALL location</p>
                        <div class="card-sub">
                            <p><ion-icon name="today-outline"></ion-icon> 10 mins ago</p>
                            <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                            <p><ion-icon name="people-outline"></ion-icon> 130 Applicants</p>
                        </div>
                    </div>
                    <div class="card-right">
                        <div class="card-tag">
                            <h5>Division</h5>
                            <a href="#">Data Science</a>
                        </div>
                        <div class="card-salary">
                            <p><b>$200k</b> <span>/ year</span></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-left red-bg">
                        <img src="images/Building.svg">
                    </div>
                    <div class="card-center">
                        <h3>kapasan</h3>
                        <p class="card-detail">Data Analyst, Product Analyst</p>
                        <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Jl. Rangkah II No.60</p>
                        <div class="card-sub">
                            <p><ion-icon name="today-outline"></ion-icon> 1 hour ago</p>
                            <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                            <p><ion-icon name="people-outline"></ion-icon> 240 Applicants</p>
                        </div>
                    </div>
                    <div class="card-right">
                        <div class="card-tag">
                            <h5>Division</h5>
                            <a href="#">Engineer, Product</a>
                        </div>
                        <div class="card-salary">
                            <p><b>$485k</b> <span>/ year</span></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-left blue-bg">
                        <img src="images/Building.svg">
                    </div>
                    <div class="card-center">
                        <h3>demak</h3>
                        <p class="card-detail">Designer, Programmer</p>
                        <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Jl. Rangkah II No.60</p>
                        <div class="card-sub">
                            <p><ion-icon name="today-outline"></ion-icon> 1 mins ago</p>
                            <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                            <p><ion-icon name="people-outline"></ion-icon> 200 Applicants</p>
                        </div>
                    </div>
                    <div class="card-right">
                        <div class="card-tag">
                            <h5>Division</h5>
                            <a href="#">Programmer</a>
                        </div>
                        <div class="card-salary">
                            <p><b>$350k</b> <span>/ year</span></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-left blue-bg">
                        <img src="{{ asset('rudi.jpg') }}">
                    </div>
                    <div class="card-center">
                        <h3>perak</h3>
                        <p class="card-detail">Designer, Programmer</p>
                        <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Jl. Rangkah II No.60</p>
                        <div class="card-sub">
                            <p><ion-icon name="today-outline"></ion-icon> 1 mins ago</p>
                            <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                            <p><ion-icon name="people-outline"></ion-icon> 200 Applicants</p>
                        </div>
                    </div>
                    <div class="card-right">
                        <div class="card-tag">
                            <h5>Division</h5>
                            <a href="#">Programmer</a>
                        </div>
                        <div class="card-salary">
                            <p><b>$350k</b> <span>/ year</span></p>
                        </div>
                    </div>
                </div>
            </div>
         </div>

<div class="detail">
        <ion-icon class="close-detail" name="close-outline"></ion-icon>
        <div class="detail-header">
            <img src="images/Building.svg">
            <h2>PT Kemasan Indokertas</h2>
            <p>Designer</p>
        </div>
        <hr class="divider">
        <div class="detail-desc">
            <div class="about">
                <h4>About Company</h4>
                <p>A company, abbreviated as co., is a legal entity representing an association of legal people</p>
                <a href="#">Read more</a>
            </div>
            <hr class="divider">
            <div class="qualification">
                <h4>Qualification</h4>
                <ul>
                    <li>Required education</li>
                    <li>Experience</li>
                    <li>Training</li>
                </ul>
            </div>
        </div>
        <hr class="divider">
        <div class="detail-btn">
            <button class="btn-apply">Apply Now</button>
            <button class="btn-save">Save Job</button>
        </div>
    </div>
 
 
 
 
 
   </body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="app.js"></script>
</html>