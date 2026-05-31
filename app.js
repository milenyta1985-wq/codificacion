        // LOGIN
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('loginPage').classList.add('hidden');
            document.getElementById('dashboard').classList.remove('hidden');
        });

        // LOGOUT
        document.getElementById('logoutBtn').addEventListener('click', function() {
            document.getElementById('dashboard').classList.add('hidden');
            document.getElementById('loginPage').classList.remove('hidden');
        });

        // MENU TOGGLE
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
            document.querySelector('.main-content').classList.toggle('expanded');
        });

        // NAVIGATION
        const menuItems = document.querySelectorAll('.menu-item');
        const pages = document.querySelectorAll('.page-content');
        const breadcrumb = document.getElementById('breadcrumb');

        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all menu items
                menuItems.forEach(mi => mi.classList.remove('active'));
                
                // Add active class to clicked item
                this.classList.add('active');
                
                // Get page name
                const pageName = this.getAttribute('data-page');
                
                // Hide all pages
                pages.forEach(page => page.classList.add('hidden'));
                
                // Show selected page
                document.getElementById('page-' + pageName).classList.remove('hidden');
                
                // Update breadcrumb
                breadcrumb.textContent = this.querySelector('span').textContent;
            });
        });

        // MODAL FUNCTIONS
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
        }

        // Close modal on outside click
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                }
            });
        });

        // TAB FUNCTIONALITY
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', function() {
                const parent = this.closest('.tabs');
                parent.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Responsive sidebar for mobile
        if (window.innerWidth <= 768) {
            document.getElementById('sidebar').classList.add('collapsed');
            document.querySelector('.main-content').classList.add('expanded');
        }

        window.addEventListener('resize', function() {
            if (window.innerWidth <= 768) {
                document.getElementById('sidebar').classList.add('collapsed');
                document.querySelector('.main-content').classList.add('expanded');
            }
        });
        