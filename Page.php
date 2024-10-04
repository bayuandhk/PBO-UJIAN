<?php
class Page {
    private $title;
    private $heading;
    private $buttonText;
    private $buttonLink;

    public function __construct($title, $heading, $buttonText, $buttonLink) {
        $this->title = $title;
        $this->heading = $heading;
        $this->buttonText = $buttonText;
        $this->buttonLink = $buttonLink;
    }

    public function render() {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . htmlspecialchars($this->title) . '</title>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    flex-direction: column;
                    margin: 0;
                    background-color: #f0f0f0;
                }
                h1 {
                    font-size: 36px;
                    text-align: center;
                    font-family: Arial, sans-serif;
                    margin-bottom: 20px;
                }
                .button {
                    font-size: 18px;
                    padding: 10px 20px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    text-decoration: none;
                }
                .button:hover {
                    background-color: #0056b3;
                }
            </style>
        </head>
        <body>
            <h1>' . htmlspecialchars($this->heading) . '</h1>
            <a href="' . htmlspecialchars($this->buttonLink) . '" class="button">' . htmlspecialchars($this->buttonText) . '</a>
        </body>
        </html>';
    }
}
?>
