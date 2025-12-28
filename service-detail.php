<?php
include 'includes/header.php';
include 'includes/navbar.php';

// Load services data
$servicesJson = file_get_contents(__DIR__ . '/data/services.json');
$services = json_decode($servicesJson, true);

// Get service ID from URL
$serviceId = $_GET['id'] ?? '';

// Find the service
$currentService = null;
foreach ($services as $service) {
    if ($service['id'] === $serviceId) {
        $currentService = $service;
        break;
    }
}

// Service details content
$serviceDetails = [
    'education-check' => [
        'full_description' => 'Our Education Verification service provides comprehensive validation of academic credentials, ensuring that candidates possess the qualifications they claim. We verify degrees, diplomas, certifications, and educational history directly with institutions.',
        'features' => [
            'Degree and diploma verification',
            'Certificate authenticity check',
            'Enrollment dates confirmation',
            'GPA/Grade verification',
            'Institution accreditation check',
            'International education verification'
        ],
        'turnaround' => '3-5 business days',
        'documents' => 'Degree certificates, transcripts, institution details'
    ],
    'employment-check' => [
        'full_description' => 'Our Employment Verification service provides thorough validation of a candidate\'s work history. We contact previous employers to verify job titles, employment dates, responsibilities, and eligibility for rehire.',
        'features' => [
            'Employment dates verification',
            'Job title confirmation',
            'Salary verification (where permitted)',
            'Reason for leaving',
            'Rehire eligibility status',
            'Performance feedback (where available)'
        ],
        'turnaround' => '2-4 business days',
        'documents' => 'Employment letters, company details, HR contacts'
    ],
    'criminal-check' => [
        'full_description' => 'Our Criminal Background Check service provides comprehensive screening to identify any criminal records or legal issues. We search court records, police databases, and other sources to ensure workplace safety.',
        'features' => [
            'National criminal database search',
            'Court records verification',
            'Police verification',
            'Pending cases check',
            'Sex offender registry check',
            'Terrorism watchlist screening'
        ],
        'turnaround' => '5-7 business days',
        'documents' => 'CNIC copy, current address proof'
    ],
    'identity-check' => [
        'full_description' => 'Our Identity Verification service validates that candidates are who they claim to be. We verify government-issued IDs, CNIC/NICOP, passports, and other identity documents to prevent fraud.',
        'features' => [
            'CNIC/NICOP verification',
            'Passport verification',
            'Address verification',
            'Photo ID matching',
            'Biometric verification (optional)',
            'NADRA database check'
        ],
        'turnaround' => '1-2 business days',
        'documents' => 'CNIC, passport, utility bills'
    ],
    'site-visit-check' => [
        'full_description' => 'Our Site Visit Verification service provides physical verification of addresses and locations. Our field agents visit the claimed addresses to verify residence, workplace, or business locations.',
        'features' => [
            'Residential address verification',
            'Office/workplace verification',
            'Landlord/neighbor confirmation',
            'Photo documentation',
            'GPS-tagged verification',
            'Detailed location report'
        ],
        'turnaround' => '3-5 business days',
        'documents' => 'Complete address details, contact numbers'
    ],
    'drug-test' => [
        'full_description' => 'Our Drug Testing service helps maintain a safe and productive workplace by screening candidates for substance abuse. We partner with certified laboratories for accurate and confidential testing.',
        'features' => [
            '5-panel drug screening',
            '10-panel drug screening',
            'Alcohol testing',
            'Certified laboratory processing',
            'Chain of custody documentation',
            'Medical Review Officer (MRO) review'
        ],
        'turnaround' => '2-3 business days',
        'documents' => 'Candidate consent form, ID proof'
    ],
    'global-sanctions' => [
        'full_description' => 'Our Global Sanctions Check screens individuals against international sanctions lists, PEP (Politically Exposed Persons) databases, and global watchlists to ensure regulatory compliance.',
        'features' => [
            'OFAC sanctions list check',
            'UN sanctions list screening',
            'PEP database search',
            'Global watchlist screening',
            'Adverse media check',
            'Ongoing monitoring (optional)'
        ],
        'turnaround' => '1-2 business days',
        'documents' => 'Full name, date of birth, nationality'
    ],
    'reference-check' => [
        'full_description' => 'Our Professional Reference Check service contacts provided references to gather insights about a candidate\'s work performance, character, and professional conduct.',
        'features' => [
            'Professional reference interviews',
            'Character reference verification',
            'Performance assessment',
            'Teamwork and collaboration feedback',
            'Strengths and areas of improvement',
            'Detailed reference report'
        ],
        'turnaround' => '2-4 business days',
        'documents' => 'Reference contact details, consent form'
    ],
    'social-media-check' => [
        'full_description' => 'Our Social Media Screening service analyzes a candidate\'s digital footprint and online presence to identify potential reputation risks or concerning behavior patterns.',
        'features' => [
            'LinkedIn profile verification',
            'Public social media analysis',
            'Online reputation assessment',
            'Inappropriate content flagging',
            'Professional conduct review',
            'Digital footprint report'
        ],
        'turnaround' => '2-3 business days',
        'documents' => 'Social media handles, consent form'
    ],
    'vendor-check' => [
        'full_description' => 'Our Vendor Due Diligence service provides comprehensive screening of vendors, suppliers, and business partners to ensure you\'re working with legitimate and trustworthy organizations.',
        'features' => [
            'Company registration verification',
            'Financial health assessment',
            'Director/owner background check',
            'Business reputation analysis',
            'Legal compliance check',
            'References from other clients'
        ],
        'turnaround' => '5-7 business days',
        'documents' => 'Company registration docs, NTN certificate'
    ]
];

$details = $serviceDetails[$serviceId] ?? [
    'full_description' => 'Contact us for more information about this service.',
    'features' => [],
    'turnaround' => 'Contact for details',
    'documents' => 'Contact for requirements'
];

if (!$currentService) {
    header('Location: services.php');
    exit;
}
?>

<main style="padding-top: 100px;">
    <!-- Service Hero -->
    <section style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); color: white; padding: 80px 0;">
        <div class="container">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <span style="font-size: 3rem;"><?php echo $currentService['icon']; ?></span>
                <h1 style="font-size: 2.5rem; margin: 0;"><?php echo htmlspecialchars($currentService['title']); ?></h1>
            </div>
            <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px;">
                <?php echo htmlspecialchars($currentService['description']); ?>
            </p>
        </div>
    </section>

    <!-- Service Details -->
    <section class="section">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 4rem;">
                <div>
                    <h2 style="margin-bottom: 1.5rem;">About This Service</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">
                        <?php echo $details['full_description']; ?>
                    </p>

                    <h3 style="margin-bottom: 1rem;">What's Included</h3>
                    <ul style="list-style: none; padding: 0;">
                        <?php foreach ($details['features'] as $feature): ?>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--bg-gray); display: flex; align-items: center; gap: 1rem;">
                            <span style="color: var(--success-color); font-size: 1.25rem;">✓</span>
                            <?php echo htmlspecialchars($feature); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div>
                    <!-- Quick Info Card -->
                    <div style="background: var(--bg-light); padding: 2rem; border-radius: 16px; position: sticky; top: 120px;">
                        <h3 style="margin-bottom: 1.5rem;">Quick Information</h3>

                        <div style="margin-bottom: 1.5rem;">
                            <p style="color: var(--text-light); margin-bottom: 0.25rem; font-size: 0.9rem;">Turnaround Time</p>
                            <p style="font-weight: 600; font-size: 1.1rem; color: var(--primary-color);"><?php echo $details['turnaround']; ?></p>
                        </div>

                        <div style="margin-bottom: 1.5rem;">
                            <p style="color: var(--text-light); margin-bottom: 0.25rem; font-size: 0.9rem;">Required Documents</p>
                            <p style="font-weight: 500;"><?php echo $details['documents']; ?></p>
                        </div>

                        <a href="contact.php" class="primary-btn" style="display: block; text-align: center; width: 100%;">Request This Service</a>

                        <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: var(--text-light);">
                            Or call us: <a href="tel:080011222" style="color: var(--primary-color);">0800-11222</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Services -->
    <section class="section" style="background: var(--bg-light);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 2rem;">Other Services</h2>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
                <?php
                $count = 0;
                foreach ($services as $service):
                    if ($service['id'] !== $serviceId && $count < 4):
                        $count++;
                ?>
                <a href="service-detail.php?id=<?php echo htmlspecialchars($service['id']); ?>" style="background: white; padding: 1.5rem; border-radius: 12px; text-decoration: none; text-align: center; transition: var(--transition);">
                    <div style="font-size: 2rem; margin-bottom: 0.5rem;"><?php echo $service['icon']; ?></div>
                    <h4 style="color: var(--text-dark); font-size: 1rem;"><?php echo htmlspecialchars($service['title']); ?></h4>
                </a>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
