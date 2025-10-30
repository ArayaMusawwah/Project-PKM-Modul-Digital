// JavaScript for Windows 10 Installation Tutorial

// Function to show specific section
function showSection(sectionId) {
    // Hide all sections
    document.querySelectorAll('.section-content').forEach(section => {
        section.classList.remove('active');
    });
    
    // Remove active class from all sidebar links
    document.querySelectorAll('.list-group-item').forEach(link => {
        link.classList.remove('active');
    });
    
    // Show requested section
    document.getElementById(sectionId).classList.add('active');
    
    // Update sidebar active link
    document.querySelector(`[data-section="${sectionId}"]`).classList.add('active');
    
    // Scroll to top
    window.scrollTo(0, 0);
    
    // Update URL without reloading page
    history.pushState({}, '', '#' + sectionId);
    
    // Close sidebar on mobile after selection
    if (window.innerWidth < 992) {
        toggleSidebar();
    }
}

// Function to toggle sidebar on mobile
function toggleSidebar() {
    const sidebar = document.querySelector('.tutorial-sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    
    // Toggle sidebar on mobile
    if (window.innerWidth < 992 && sidebar && overlay) {
        if (sidebar.classList.contains('show')) {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
            document.body.style.overflow = 'auto';
        } else {
            sidebar.classList.add('show');
            overlay.classList.add('show');
            document.body.style.overflow = 'hidden';
        }
    }
    // On desktop, we don't need to do anything since sidebar is always visible
}

// Initialize the page with overview section
document.addEventListener('DOMContentLoaded', function() {
    // Initialize gallery functionality
    initGallery();
    
    // Add event listeners to sidebar links
    document.querySelectorAll('.list-group-item').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const sectionId = this.getAttribute('data-section');
            showSection(sectionId);
        });
    });
    
    // Add event listeners to navigation buttons
    document.querySelectorAll('.btn').forEach(button => {
        if (button.onclick) {
            // Keep existing onclick handlers
        }
    });
    
    // Check URL hash to show correct section on page load
    const hash = window.location.hash.substring(1);
    if (hash && document.getElementById(hash)) {
        showSection(hash);
    } else {
        // Show overview by default
        showSection('overview');
    }
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', function(e) {
        const hash = window.location.hash.substring(1);
        if (hash && document.getElementById(hash)) {
            showSection(hash);
        }
    });
    
    // Close sidebar when clicking outside on mobile
    const overlay = document.getElementById('sidebarOverlay');
    if (overlay) {
        overlay.addEventListener('click', toggleSidebar);
    }
    
    // Close sidebar when resizing from mobile to desktop
    window.addEventListener('resize', function() {
        const sidebar = document.querySelector('.tutorial-sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        
        if (window.innerWidth >= 992) {
            // On desktop, ensure mobile state is cleared
            if (sidebar) {
                sidebar.classList.remove('show');
            }
            if (overlay) {
                overlay.classList.remove('show');
            }
            document.body.style.overflow = 'auto';
        }
    });
});

// Function to handle image gallery
function initGallery() {
    // bs5-lightbox should initialize automatically with data-toggle="lightbox" attribute
    // No additional initialization needed since bs5-lightbox is standalone
}

// Function to share tutorial
function shareTutorial() {
    if (navigator.share) {
        navigator.share({
            title: 'Tutorial Instalasi Windows 10 dengan Rufus',
            text: 'Pelajari cara menginstal Windows 10 menggunakan Rufus dengan panduan langkah-demi-langkah ini',
            url: window.location.href
        })
        .catch(error => console.log('Error sharing:', error));
    } else {
        // Fallback for browsers that don't support Web Share API
        const shareUrl = window.location.href;
        const shareText = 'Tutorial Instalasi Windows 10 dengan Rufus: ' + shareUrl;
        navigator.clipboard.writeText(shareText)
            .then(() => alert('Link telah disalin ke clipboard!'))
            .catch(err => console.error('Could not copy text: ', err));
    }
}