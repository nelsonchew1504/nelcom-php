<?php 
    //include 'conn.php';
    $limit = 9;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    //$result = $conn->query("SELECT * FROM user LIMIT $start, $limit");
    //$data = $result->fetch_all(MYSQLI_ASSOC);

    $sample = [
    ["username" => "chew1", "idno" => 1949888888],
    ["username" => "chew2", "idno" => 1950888888],
    ["username" => "chew3", "idno" => 1951888888],
    ["username" => "chew4", "idno" => 1952888888],
    ["username" => "chew5", "idno" => 1953888888],
    ["username" => "chew6", "idno" => 1954888888],
    ["username" => "chew7", "idno" => 1955888888],
    ["username" => "chew8", "idno" => 1956888888],
    ["username" => "chew9", "idno" => 1957888888],
    ["username" => "chew10", "idno" => 1958888888],
    ["username" => "chew11", "idno" => 1959888888],
    ["username" => "chew12", "idno" => 1960888888],
    ["username" => "chew13", "idno" => 1961888888],
    ["username" => "chew14", "idno" => 1962888888],
    ["username" => "chew15", "idno" => 1963888888],
    ["username" => "chew16", "idno" => 1964888888],
    ["username" => "chew17", "idno" => 1965888888],
    ["username" => "chew18", "idno" => 1966888888],
    ["username" => "chew19", "idno" => 1967888888],
    ["username" => "chew20", "idno" => 1968888888],
    ["username" => "chew21", "idno" => 1969888888],
    ["username" => "chew22", "idno" => 1970888888],
    ["username" => "chew23", "idno" => 1971888888],
    ["username" => "chew24", "idno" => 1972888888],
    ["username" => "chew25", "idno" => 1973888888],
    ["username" => "chew26", "idno" => 1974888888],
    ["username" => "chew27", "idno" => 1975888888],
    ["username" => "chew28", "idno" => 1976888888],
    ["username" => "chew29", "idno" => 1977888888],
    ["username" => "chew30", "idno" => 1978888888],
    ["username" => "chew31", "idno" => 1979888888],
    ["username" => "chew32", "idno" => 1980888888],
    ["username" => "chew33", "idno" => 1981888888],
    ["username" => "chew34", "idno" => 1982888888],
    ["username" => "chew35", "idno" => 1983888888],
    ["username" => "chew36", "idno" => 1984888888],
    ["username" => "chew37", "idno" => 1985888888],
    ["username" => "chew38", "idno" => 1986888888],
    ["username" => "chew39", "idno" => 1987888888],
    ["username" => "chew40", "idno" => 1988888888],
    ["username" => "chew41", "idno" => 1989888888],
    ["username" => "chew42", "idno" => 1990888888],
    ["username" => "chew43", "idno" => 1991888888],
    ["username" => "chew44", "idno" => 1992888888],
    ["username" => "chew45", "idno" => 1993888888],
    ["username" => "chew46", "idno" => 1994888888],
    ["username" => "chew47", "idno" => 1995888888],
    ["username" => "chew48", "idno" => 1996888888],
    ["username" => "chew49", "idno" => 1997888888],
    ["username" => "chew50", "idno" => 1998888888],
    ["username" => "chew51", "idno" => 1999888888],
    ["username" => "chew52", "idno" => 2000888888],
    ["username" => "chew53", "idno" => 2001888888],
    ["username" => "chew54", "idno" => 2002888888],
    ["username" => "chew55", "idno" => 2003888888],
    ["username" => "chew56", "idno" => 2004888888],
    ["username" => "chew57", "idno" => 2005888888],
    ["username" => "chew58", "idno" => 2006888888],
    ["username" => "chew59", "idno" => 2007888888],
    ["username" => "chew60", "idno" => 2008888888],
    ["username" => "chew61", "idno" => 2009888888],
    ["username" => "chew62", "idno" => 2010888888],
    ["username" => "chew63", "idno" => 2011888888],
    ["username" => "chew64", "idno" => 2012888888],
    ["username" => "chew65", "idno" => 2013888888],
    ["username" => "chew66", "idno" => 2014888888],
    ["username" => "chew67", "idno" => 2015888888],
    ["username" => "chew68", "idno" => 2016888888],
    ["username" => "chew69", "idno" => 2017888888],
    ["username" => "chew70", "idno" => 2018888888],
    ["username" => "chew71", "idno" => 2019888888],
    ["username" => "chew72", "idno" => 2020888888],
    ["username" => "chew73", "idno" => 2021888888],
    ["username" => "chew74", "idno" => 2022888888],
    ["username" => "chew75", "idno" => 2023888888],
    ["username" => "chew76", "idno" => 2024888888],
    ["username" => "chew77", "idno" => 2025888888],
    ["username" => "chew78", "idno" => 2026888888],
    ["username" => "chew79", "idno" => 2027888888],
    ["username" => "chew80", "idno" => 2028888888],
    ["username" => "chew81", "idno" => 2029888888],
    ["username" => "chew82", "idno" => 2030888888],
    ["username" => "chew83", "idno" => 2031888888],
    ["username" => "chew84", "idno" => 2032888888],
    ["username" => "chew85", "idno" => 2033888888],
    ["username" => "chew86", "idno" => 2034888888],
    ["username" => "chew87", "idno" => 2035888888],
    ["username" => "chew88", "idno" => 2036888888],
    ["username" => "chew89", "idno" => 2037888888],
    ["username" => "chew90", "idno" => 2038888888],
    ["username" => "chew91", "idno" => 2039888888],
    ["username" => "chew92", "idno" => 2040888888],
    ["username" => "chew93", "idno" => 2041888888],
    ["username" => "chew94", "idno" => 2042888888],
    ["username" => "chew95", "idno" => 2043888888],
    ["username" => "chew96", "idno" => 2044888888],
    ["username" => "chew97", "idno" => 2045888888],
    ["username" => "chew98", "idno" => 2046888888],
    ["username" => "chew99", "idno" => 2047888888],
    ["username" => "chew100", "idno" => 2048888888]];

    $data = array_slice($sample, $start, $limit);
    
    //$result1 = $conn->query("SELECT count(id) as cnt FROM user");
    //$data1 = $result1->fetch_all(MYSQLI_ASSOC);
    //$ttl = $data1[0]['cnt'];
    $ttl = count($sample);
    $pages = ceil($ttl/$limit);

    $prev = ($page-1==0) ? 1 : $page-1;
    $next = ($page+1>$pages) ? $pages : $page+1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
    <!--
        <script type="text/javascript" src="./jquery-3.5.1.js"></script>
    -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container well">
            <h1>Pagination</h1>
            <div class="row">
                <div class="col-md-10">
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="index.php?page=<?= $prev; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <?php for($i=1; $i<=$pages; $i++) : ?>
                    <li class="page-item">
                        <a class="page-link" href="index.php?page=<?= $i; ?>"><?= $i; ?></a>
                    </li>
                    <?php endfor ?>
                    <li class="page-item">
                    <a class="page-link" href="index.php?page=<?= $next; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                    </ul>
                    </nav>
                </div>
            </div>
            <div class="container">  
                <?php foreach($data as $idx=>$value): ?>
                    <?php $idx = $idx+1; ?>
                    <?php if ($idx%3==1): ?>
                        <div class="row" style="margin:10px;">
                    <?php endif; ?>    
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                        <div style="text-align: center; margin: 5px;">
                        <img src="./circle-g.png" style="height:100px; width:100px;" class="card-img-top" alt="...">
                        </div>

                        <div class="card-body">
                        <p class="card-text"><?= $value['username']; ?> <?= $value['idno'];  ?>
                        </p>
                        </div>
                        </div>
                    </div>
                    <?php if ($idx%3==0): ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>
