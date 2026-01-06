<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main style="padding-top: 100px;">
    <!-- Hero -->
    <section style="background: linear-gradient(135deg, #ff7a00 0%, #ff9a3d 100%); color: white; padding: 80px 0;">
        <div class="container">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <span style="font-size: 3.5rem;">🆔</span>
                <h1 style="font-size: 2.5rem; margin: 0; color: white;">Identity Verification</h1>
            </div>
            <p style="font-size: 1.2rem; max-width: 700px; color: white;">
                Validate identity documents and confirm that candidates are who they claim to be through NADRA integration and document verification.
            </p>
        </div>
    </section>

    <!-- Overview -->
    <section class="section">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 4rem;">
                <div>
                    <h2 style="margin-bottom: 1.5rem; margin-top: 1.5rem;">Confirm True Identity</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Identity fraud is a growing concern in Pakistan and globally. Candidates may use fake CNICs, forged documents, or even assume entirely false identities to secure employment. This can expose your organization to serious risks including fraud, theft, and legal liability.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Our Identity Verification service uses direct integration with NADRA databases to confirm CNIC authenticity, verify biometric data, and ensure that candidates are exactly who they claim to be.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8;">
                        This foundational check should be the first step in any comprehensive background screening process, as all other verifications depend on confirming the candidate's true identity.
                    </p>
                </div>
                <div style="background: var(--bg-light); padding: 2rem; border-radius: 16px; height: fit-content;">
                    <h3 style="margin-bottom: 1.5rem; color: var(--primary-color);">Quick Facts</h3>
                    <div style="margin-bottom: 1.5rem;">
                        <p style="color: var(--text-light); font-size: 0.9rem;">Turnaround Time</p>
                        <p style="font-size: 1.5rem; font-weight: 700;">1-2 Business Days</p>
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <p style="color: var(--text-light); font-size: 0.9rem;">Data Source</p>
                        <p style="font-size: 1.5rem; font-weight: 700;">NADRA Integrated</p>
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <p style="color: var(--text-light); font-size: 0.9rem;">Accuracy Rate</p>
                        <p style="font-size: 1.5rem; font-weight: 700;">100%</p>
                    </div>
                    <a href="contact.php" class="primary-btn" style="display: block; text-align: center; width: 100%;">Request This Service</a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Verify -->
    <section class="section" style="background: var(--bg-light);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem;">What We Verify</h2>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 16px; text-align: center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">🪪</div>
                    <h4>CNIC Verification</h4>
                    <p style="color: var(--text-medium);">Verify CNIC authenticity and details directly through NADRA database integration.</p>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 16px; text-align: center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">🌍</div>
                    <h4>NICOP Verification</h4>
                    <p style="color: var(--text-medium);">Verify National Identity Card for Overseas Pakistanis for candidates abroad.</p>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 16px; text-align: center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">📕</div>
                    <h4>Passport Verification</h4>
                    <p style="color: var(--text-medium);">Confirm passport authenticity and details through immigration records.</p>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 16px; text-align: center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">📸</div>
                    <h4>Photo ID Matching</h4>
                    <p style="color: var(--text-medium);">Match candidate photos against official ID documents to prevent impersonation.</p>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 16px; text-align: center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">📍</div>
                    <h4>Address Verification</h4>
                    <p style="color: var(--text-medium);">Verify registered address on CNIC matches candidate's claimed address.</p>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 16px; text-align: center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">👆</div>
                    <h4>Biometric Check</h4>
                    <p style="color: var(--text-medium);">Optional biometric verification through fingerprint matching with NADRA records.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NADRA Integration -->
    <section class="section">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                <div>
                    <h2 style="margin-bottom: 1.5rem;">NADRA Database Integration</h2>
                    <p style="margin-bottom: 1.5rem;">
                        Our direct integration with NADRA (National Database and Registration Authority) ensures the highest level of accuracy in identity verification.
                    </p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.75rem 0; display: flex; gap: 0.75rem; align-items: flex-start;">
                            <span style="color: var(--success-color); font-size: 1.25rem;">✓</span>
                            <div>
                                <strong>Real-time Verification</strong>
                                <p style="color: var(--text-medium); margin: 0;">Instant confirmation of CNIC details against official records</p>
                            </div>
                        </li>
                        <li style="padding: 0.75rem 0; display: flex; gap: 0.75rem; align-items: flex-start;">
                            <span style="color: var(--success-color); font-size: 1.25rem;">✓</span>
                            <div>
                                <strong>Complete Data Match</strong>
                                <p style="color: var(--text-medium); margin: 0;">Name, father's name, date of birth, and address verification</p>
                            </div>
                        </li>
                        <li style="padding: 0.75rem 0; display: flex; gap: 0.75rem; align-items: flex-start;">
                            <span style="color: var(--success-color); font-size: 1.25rem;">✓</span>
                            <div>
                                <strong>CNIC Status Check</strong>
                                <p style="color: var(--text-medium); margin: 0;">Verify if CNIC is active, expired, or blocked</p>
                            </div>
                        </li>
                        <li style="padding: 0.75rem 0; display: flex; gap: 0.75rem; align-items: flex-start;">
                            <span style="color: var(--success-color); font-size: 1.25rem;">✓</span>
                            <div>
                                <strong>Photo Verification</strong>
                                <p style="color: var(--text-medium); margin: 0;">Compare candidate photo with NADRA registered image</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); padding: 3rem; border-radius: 16px; text-align: center; color: white;">
                    <div style="font-size: 5rem; margin-bottom: 1rem;">🛡️</div>
                    <h3 style="color: white;">100% Authentic</h3>
                    <p style="opacity: 0.9;">Direct NADRA integration ensures zero possibility of fake CNIC verification</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Documents Required -->
    <section class="section" style="background: var(--bg-light);">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="text-align: center; margin-bottom: 2rem;">Documents Required</h2>
                <div style="background: white; padding: 2rem; border-radius: 16px;">
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 1rem; border-bottom: 1px solid var(--bg-gray); display: flex; align-items: center; gap: 1rem;">
                            <span style="color: var(--primary-color); font-size: 1.25rem;">📄</span>
                            <div>
                                <strong>CNIC Copy (Front & Back)</strong>
                                <p style="color: var(--text-medium); margin: 0; font-size: 0.9rem;">Clear, legible copy of valid CNIC showing all details</p>
                            </div>
                        </li>
                        <li style="padding: 1rem; border-bottom: 1px solid var(--bg-gray); display: flex; align-items: center; gap: 1rem;">
                            <span style="color: var(--primary-color); font-size: 1.25rem;">📄</span>
                            <div>
                                <strong>Recent Photograph</strong>
                                <p style="color: var(--text-medium); margin: 0; font-size: 0.9rem;">Passport-size photo for visual verification</p>
                            </div>
                        </li>
                        <li style="padding: 1rem; display: flex; align-items: center; gap: 1rem;">
                            <span style="color: var(--primary-color); font-size: 1.25rem;">📄</span>
                            <div>
                                <strong>Candidate Consent Form</strong>
                                <p style="color: var(--text-medium); margin: 0; font-size: 0.9rem;">Signed authorization for identity verification</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); padding: 60px 0; text-align: center;">
        <div class="container">
            <h2 style="color: white; margin-bottom: 1rem;">Verify Identity with Confidence</h2>
            <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">Get NADRA-verified identity confirmation in 1-2 business days</p>
            <a href="contact.php" class="primary-btn" style="background: white; color: var(--primary-color);">Get Started</a>
            <p style="color: rgba(255,255,255,0.8); margin-top: 1rem;">Or call us: <a href="tel:080011222" style="color: white;">0800-11222</a></p>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
