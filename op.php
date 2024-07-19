<?php
$websiteURL = "https://mystrax.com/hosteladmin/admin/public/"; // Replace with your website URL
$launcherName = "Example Website"; // Replace with your desired launcher name

$desktopFileContents = <<<EOL
[Desktop Entry]
Type=Application
Name={$launcherName}
Exec=xdg-open {$websiteURL}
Icon=web-browser
Terminal=false
EOL;

$desktopFileName = str_replace(' ', '_', strtolower($launcherName)) . '.desktop';
$desktopFilePath = '/Desktop/' . $desktopFileName; // Replace "your_username" with your actual username

file_put_contents($desktopFilePath, $desktopFileContents);

echo "Desktop launcher created: {$desktopFilePath}\n";
?>
