<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['decision'])) {
        $decision = $_POST['decision'];
<?php
// ← Change this path if your file is located elsewhere
$filePath = __DIR__ . '/decision.txt';

// Enable error reporting (helpful during troubleshooting)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['decision'])) {
        $decision = $_POST['decision'];

        // Attempt to write the decision to the file
        if (file_put_contents($filePath, $decision) !== false) {
            echo "✅ Decision recorded: " . htmlspecialchars($decision);
        } else {
            http_response_code(500);
            echo "❌ Failed to write to file. ";
            echo "Check file path & permissions.";
        }
    } else {
        http_response_code(400);
        echo "❌ No decision received.";
    }
} else {
    http_response_code(405);
    echo "❌ Invalid request method.";
}

        // Save the decision to a file
        $file = 'decision.txt';
        if (file_put_contents($file, $decision)) {
            echo "✅ Decision recorded: " . htmlspecialchars($decision);
        } else {
            echo "❌ Failed to write to file.";
        }
    } else {
        echo "❌ No decision received.";
    }
} else {
    echo "❌ Invalid request method.";
}
?>
