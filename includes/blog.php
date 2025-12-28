<?php
// Load blog data from JSON
$blogJson = file_get_contents(__DIR__ . '/../data/blog.json');
$blogPosts = json_decode($blogJson, true);

// Helper function to format date
function formatDate($dateString) {
    $date = new DateTime($dateString);
    return $date->format('F j, Y');
}
?>

<section id="blog" class="blog-section">
    <div class="container">
        <h2 class="section-title">Latest Insights</h2>
        <p class="section-subtitle">
            Expert perspectives on background screening and compliance
        </p>
        <div class="blog-grid">
            <?php foreach ($blogPosts as $post): ?>
            <div class="blog-card fade-in">
                <div class="blog-image">
                    📰
                </div>
                <div class="blog-content">
                    <span class="blog-category"><?php echo htmlspecialchars($post['category']); ?></span>
                    <p class="blog-date"><?php echo formatDate($post['date']); ?></p>
                    <h3 class="blog-title"><?php echo htmlspecialchars($post['title']); ?></h3>
                    <p class="blog-summary"><?php echo htmlspecialchars($post['summary']); ?></p>
                    <a href="#blog-<?php echo htmlspecialchars($post['id']); ?>" class="read-more">
                        Read More →
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
