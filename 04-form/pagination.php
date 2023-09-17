<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <style>
    html {
        font-family: 'Inter', sans-serif;
    }

    @supports (font-variation-settings: normal) {
        html {
            font-family: 'Inter var', sans-serif;
        }
    }
    * {
        box-sizing: border-box;
        font-family: "Inter var", sans-serif;
        font-size: 16px;
        font-weight: 400;
        user-select: none;
        transition: all 200ms ease;
    }

    html,
    body,
    .full-width {
        height: 100%;
    }
    body {
        &,
        html {
            margin: 0;
            padding: 0;
        }
        padding: 0 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color:black;
    }

    .hide {
        display: none;
        visibility: hidden;
        height: 0;
    }

    .pagination\:container {
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .arrow\:text {
    display: block;
    vertical-align: middle;
    font-size: 13px;
    vertical-align: middle;
    }

    .pagination\:number {
    margin: 0 6px;
    border-radius: 6px;
    background: white;
    max-width: auto;
    min-width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    padding: 0 6px;
    }

    .pagination\:active {
    background: #8f8fdf;
    position: relative;
    }

    .content {
        width: 800px;
        border: 1px solid #dfd;
        padding: 20px; 
    }
    a.pagination\:number {
        text-decoration: none;
    }
    </style>
</head>
<body>
<div class="content">
    <div class="pagination:container">
    <div class="pagination:number arrow">
        <svg width="18" height="18">
        <use xlink:href="#left" />
        </svg>
        <span class="arrow:text">Previous</span> 
    </div>
    
    <a href="pagination.php?page=1" class="pagination:number">1</a>
    <a href="pagination.php?page=2" class="pagination:number">2</a>
    <a href="pagination.php?page=3" class="pagination:number ">3</a>
    <a href="pagination.php?page=4" class="pagination:number">4</a>
    <a href="pagination.php?page=5" class="pagination:number">5</a>
    <a href="pagination.php?page=6" class="pagination:number">6</a>
    <a href="pagination.php?page=7" class="pagination:number">7</a>
    <a href="pagination.php?page=8" class="pagination:number">8</a>
    <a href="pagination.php?page=9" class="pagination:number">9</a>
    <a href="pagination.php?page=10" class="pagination:number">10</a>
    <div class="pagination:number arrow">
        <span class="arrow:text">Next</span>
        <svg width="18" height="18">
        <use xlink:href="#right" />
        </svg>
    </div>
    </div>
    <svg class="hide">
    <symbol id="left" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></symbol>
    <symbol id="right" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></symbol>
    </svg>
    <?php
        $page = (isset($_GET["page"]) == true) ? $_GET["page"] : 0;
    ?>
    <p class="result" style= "text-align: center" > Bạn đang ở trang thứ <?php echo $page; ?> </p>
</div>
</body>
</html>