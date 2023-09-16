<?php
$files = ['index.php', 'services.php', 'products.php', 'products1c.php', 'competitions.php', 'cases.php', 'blog.php', 'about.php'];

foreach ($files as $phpFile) {
    if (file_exists($phpFile)) {
        $htmlFile = str_replace('.php', '.html', $phpFile);
        ob_start();
        include $phpFile;
        $output = ob_get_clean();
        while (preg_match('/<\? include \'\.\/partials\/(.+?)\'; \?>/', $output, $matches)) {
            $includeFile = $matches[1];
            $includeContent = file_get_contents('./partials/' . $includeFile);
            $output = str_replace($matches[0], $includeContent, $output);
        }
        file_put_contents($htmlFile, $output);
        echo "Demo file $htmlFile is created\n";
    } else {
        echo "Source $phpFile doesn't exist\n";
    }
    
}
?>
