@include('landing.head')
    <!-- Hero Section -->
    <section class="bg-eerieblack text-silver py-44 relative overflow-hidden">
        <div class="container mx-auto px-2 py-5">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <h1 class="text-5xl font-bold mb-6">Building the <span class="text-yellow">Future</span> Through Engineering Excellence</h1>
                    <p class="text-lg mb-8 opacity-90">The Department of Civil Engineering provides world-class education and research opportunities in structural engineering, geotechnical engineering, transportation systems, environmental engineering, and construction management.</p>
                    <button class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">Discover Our Programs</button>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                        <div class="text-center border-l border-silver/20 pl-6">
                            <div class="text-yellow text-4xl font-bold">40+</div>
                            <div class="text-silver uppercase text-sm mt-2">Faculty Members</div>
                        </div>
                        <div class="text-center border-l border-silver/20 pl-6">
                            <div class="text-yellow text-4xl font-bold">95%</div>
                            <div class="text-silver uppercase text-sm mt-2">Employment Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-yellow text-4xl font-bold">25+</div>
                            <div class="text-silver uppercase text-sm mt-2">Research Labs</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-dark rounded-lg p-6 shadow-2xl">
                        <div class="bg- w-full h-96 rounded-md relative">
                            {{-- <div class="absolute w-32 h-32 bg-yellow/20 border border-yellow top-12 left-12"></div>
                            <div class="absolute w-48 h-24 bg-yellow/20 border border-yellow top-48 left-20"></div>
                            <div class="absolute w-24 h-40 bg-yellow/20 border border-yellow top-28 left-56"></div>
                            <div class="absolute w-16 h-16 border-2 border-yellow rounded-full flex items-center justify-center text-yellow top-6 right-6">N</div> --}}
                            <img src="{{ asset('image/civil.jpg')}}" alt="Engineering" class="w-full h-full object-cover rounded-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="bg-white py-20" id="programs">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Fasilitas Lab</h2>
                <p class="text-night max-w-2xl mx-auto">Comprehensive education pathways designed to equip future civil engineers with the knowledge and skills needed for professional success</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-davysgray rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 bg-night relative">
                        <div class="bg-yellow text-eerieblack w-12 h-12 rounded-full flex items-center justify-center font-bold absolute bottom-[-1.5rem] left-6 shadow-md">BS</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Bachelor of Science</h3>
                        <p class="text-night mb-6">Our ABET-accredited undergraduate program provides a strong foundation in civil engineering principles with hands-on project experience.</p>
                        <div class="flex justify-between text-night text-sm border-t border-silver/20 pt-4">
                            <span>4 Years</span>
                            <span>140 Credit Hours</span>
                        </div>
                    </div>
                </div>
                <div class="bg-davysgray rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 bg-night relative">
                        <div class="bg-yellow text-eerieblack w-12 h-12 rounded-full flex items-center justify-center font-bold absolute bottom-[-1.5rem] left-6 shadow-md">MS</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Master of Science</h3>
                        <p class="text-night mb-6">Advanced study with specialization options in structural engineering, geotechnical engineering, or transportation systems.</p>
                        <div class="flex justify-between text-night text-sm border-t border-silver/20 pt-4">
                            <span>2 Years</span>
                            <span>30 Credit Hours</span>
                        </div>
                    </div>
                </div>
                <div class="bg-davysgray rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 bg-night relative">
                        <div class="bg-yellow text-eerieblack w-12 h-12 rounded-full flex items-center justify-center font-bold absolute bottom-[-1.5rem] left-6 shadow-md">PhD</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Doctoral Program</h3>
                        <p class="text-night mb-6">Research-focused degree preparing students for leadership roles in academia, industry research, and advanced engineering practice.</p>
                        <div class="flex justify-between text-night text-sm border-t border-silver/20 pt-4">
                            <span>4-5 Years</span>
                            <span>Research-based</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section class="bg-silver py-20" id="faculty">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Distinguished Faculty</h2>
                <p class="text-night max-w-2xl mx-auto">Learn from world-renowned experts with extensive industry experience and research achievements</p>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-64 bg-night"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-bold mb-2">Dr. Robert Chen</h3>
                        <p class="text-night mb-4">Department Chair & Professor</p>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Structural Engineering</div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-64 bg-night"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-bold mb-2">Dr. Sarah Johnson</h3>
                        <p class="text-night mb-4">Associate Professor</p>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Geotechnical Engineering</div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-64 bg-night"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-bold mb-2">Dr. Michael Torres</h3>
                        <p class="text-night mb-4">Assistant Professor</p>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Transportation Systems</div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-64 bg-night"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-bold mb-2">Dr. Emily Watson</h3>
                        <p class="text-night mb-4">Associate Professor</p>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Environmental Engineering</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Section -->
    <section class="bg-white py-20" id="research">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="h-[450px] bg-night rounded-lg overflow-hidden"></div>
                <div>
                    <h2 class="text-4xl font-bold mb-6">Research Excellence</h2>
                    <p class="text-night mb-8">Our department conducts cutting-edge research addressing critical challenges in civil infrastructure, sustainability, and resilience. Faculty and students collaborate on innovative solutions to real-world engineering problems.</p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Sustainable Infrastructure Materials and Design</p>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Smart Cities and Transportation Networks</p>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Structural Health Monitoring and Resilience</p>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Water Resources and Environmental Engineering</p>
                        </div>
                    </div>
                    <button class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">Explore Research Labs</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-eerieblack text-silver py-20 relative overflow-hidden" id="contact">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto relative z-10">
                <h2 class="text-4xl font-bold mb-6">Join Our Engineering Community</h2>
                <p class="text-silver/90 mb-8">Take the first step toward a rewarding career in civil engineering by applying to our program today.</p>
                <div class="flex justify-center gap-4">
                    <button class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">Apply Now</button>
                    <button class="border-2 border-yellow text-yellow px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow hover:text-eerieblack transition-all">Request Information</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-night text-silver py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-yellow text-eerieblack font-bold rounded-lg w-10 h-10 flex items-center justify-center text-xl">CE</div>
                        <div class="text-silver text-2xl font-bold">Civil<span class="text-yellow">Engineering</span></div>
                    </div>
                    <p class="text-silver/80 mb-6">The Department of Civil Engineering is committed to excellence in education, research, and professional practice, preparing students to address society's infrastructure challenges.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <span class="text-yellow mr-2">➦</span> 1234 University Drive
                        </li>
                        <li class="flex items-center">
                            <span class="text-yellow mr-2">✆</span> (123) 456-7890
                        </li>
                        <li class="flex items-center">
                            <span class="text-yellow mr-2">✉</span> info@civilengineering.edu
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-yellow text-lg font-bold mb-6">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#programs" class="text-silver/80 hover:text-yellow transition-colors">Programs</a></li>
                        <li><a href="#faculty" class="text-silver/80 hover:text-yellow transition-colors">Faculty</a></li>
                        <li><a href="#research" class="text-silver/80 hover:text-yellow transition-colors">Research</a></li>
                        <li><a href="#facilities" class="text-silver/80 hover:text-yellow transition-colors">Facilities</a></li>
                        <li><a href="#contact" class="text-silver/80 hover:text-yellow transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-yellow text-lg font-bold mb-6">Social Media</h3>
                    <div class="flex gap-4">
                        <a href="#" class="bg-silver/20 text-silver w-10 h-10 rounded-full flex items-center justify-center hover:bg-yellow hover:text-eerieblack transition-colors">FB</a>
                        <a href="#" class="bg-silver/20 text-silver w-10 h-10 rounded-full flex items-center justify-center hover:bg-yellow hover:text-eerieblack transition-colors">TW</a>
                        <a href="#" class="bg-silver/20 text-silver w-10 h-10 rounded-full flex items-center justify-center hover:bg-yellow hover:text-eerieblack transition-colors">IN</a>
                    </div>
                </div>
            </div>
            <div class="text-center text-silver/60 border-t border-silver/20 pt-8">
                &copy; 2023 Teknik Sipil Universitas Muhammadiyah Surakarta. All rights reserved.
            </div>
        </div>
    </footer>
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get references to the necessary elements
  const menuToggle = document.getElementById('menu-toggle');
  const navLinks = document.getElementById('nav-links');
  
  // Initialize menu state
  let isOpen = false;
  
  // Toggle function to handle menu visibility
  function toggleMenu() {
    isOpen = !isOpen;
    
    // Change hamburger icon to X when open
    menuToggle.textContent = isOpen ? '✕' : '☰';
    
    // Toggle nav visibility with animation
    if (isOpen) {
      navLinks.classList.remove('hidden');
      
      // Add animation classes
      setTimeout(() => {
        navLinks.classList.add('opacity-100');
        navLinks.classList.add('translate-y-0');
        navLinks.classList.remove('opacity-0');
        navLinks.classList.remove('-translate-y-2');
      }, 10);
    } else {
      // Add animation classes for closing
      navLinks.classList.add('opacity-0');
      navLinks.classList.add('-translate-y-2');
      navLinks.classList.remove('opacity-100');
      navLinks.classList.remove('translate-y-0');
      
      // Hide after animation completes
      setTimeout(() => {
        navLinks.classList.add('hidden');
      }, 300);
    }
  }
  
  // Add animation classes to navLinks
  navLinks.classList.add('transition-all', 'duration-300', 'ease-in-out', 'opacity-0', '-translate-y-2');
  
  // Enhance background and drop shadow for better appearance
  navLinks.classList.add('shadow-lg', 'border-t', 'bg-eerieblack');
  
  // Enhance mobile styling
  if (!navLinks.classList.contains('md:p-0')) {
    navLinks.classList.add('md:border-none', 'md:shadow-none', 'md:bg-transparent');
  }
  
  // Toggle mobile menu when hamburger is clicked
  menuToggle.addEventListener('click', toggleMenu);
  
  // Close mobile menu when a link is clicked
  const links = navLinks.querySelectorAll('a');
  links.forEach(link => {
    link.addEventListener('click', function() {
      if (window.innerWidth < 768 && isOpen) {
        toggleMenu();
      }
    });
  });
  
  // Close mobile menu on window resize if screen becomes larger
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 768 && isOpen) {
      isOpen = false;
      menuToggle.textContent = '☰';
      navLinks.classList.remove('hidden', 'md:flex');
      navLinks.classList.add('md:flex');
    }
  });
  
  // Apply mobile-specific styling to links
  if (window.innerWidth < 768) {
    links.forEach(link => {
      link.classList.add('block', 'text-center', 'border-b', 'border-gray-700', 'pb-2', 'w-full');
    });
  }
  
  // Initial setup to ensure correct display state based on screen size
  if (window.innerWidth >= 768) {
    navLinks.classList.remove('hidden');
    navLinks.classList.add('md:flex');
  } else {
    navLinks.classList.add('hidden');
  }
});
</script>
</html>