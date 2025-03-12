@include('component.head')

    <!-- Page Header -->
    <section class="page-header bg-eerieblack text-silver pt-32 pb-10 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Laboratory <span class="text-yellow">Reservation</span></h1>
            <p class="text-lg max-w-2xl">Book time in our state-of-the-art research and teaching laboratories. Check availability and reserve spaces for your academic and research needs.</p>
        </div>
    </section>

    <!-- Reservation Section -->
    <section class="reservation-section bg-white py-16">
        <div class="container mx-auto px-4">
            <div class="reservation-grid grid md:grid-cols-2 gap-8">
                <!-- Reservation Form -->
                <div class="reservation-form bg-silver rounded-lg p-8 shadow-lg">
                    <h2 class="form-section-title text-2xl font-bold mb-6 pb-2 relative">Reserve a Lab</h2>
                    <form id="labReservationForm">
                        <div class="form-grid grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="fullName" class="form-label block font-semibold mb-2">Full Name</label>
                                <input type="text" id="fullName" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="form-label block font-semibold mb-2">Email Address</label>
                                <input type="email" id="email" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="studentId" class="form-label block font-semibold mb-2">Student/Faculty ID</label>
                                <input type="text" id="studentId" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phoneNumber" class="form-label block font-semibold mb-2">Phone Number</label>
                                <input type="tel" id="phoneNumber" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow">
                            </div>
                            
                            <div class="form-group">
                                <label for="labType" class="form-label block font-semibold mb-2">Laboratory Type</label>
                                <select id="labType" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" required>
                                    <option value="">Select a laboratory</option>
                                    <option value="structures">Structural Engineering Lab</option>
                                    <option value="materials">Materials Testing Lab</option>
                                    <option value="geotechnical">Geotechnical Engineering Lab</option>
                                    <option value="hydraulics">Hydraulics Lab</option>
                                    <option value="environmental">Environmental Engineering Lab</option>
                                    <option value="transportation">Transportation Systems Lab</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="groupSize" class="form-label block font-semibold mb-2">Group Size</label>
                                <select id="groupSize" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" required>
                                    <option value="">Select group size</option>
                                    <option value="1">1 person</option>
                                    <option value="2-3">2-3 people</option>
                                    <option value="4-6">4-6 people</option>
                                    <option value="7-10">7-10 people</option>
                                    <option value="10+">More than 10 people</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="reservationDate" class="form-label block font-semibold mb-2">Reservation Date</label>
                                <input type="date" id="reservationDate" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="timeSlot" class="form-label block font-semibold mb-2">Time Slot</label>
                                <select id="timeSlot" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" required>
                                    <option value="">Select a time slot</option>
                                    <option value="8am-10am">8:00 AM - 10:00 AM</option>
                                    <option value="10am-12pm">10:00 AM - 12:00 PM</option>
                                    <option value="12pm-2pm">12:00 PM - 2:00 PM</option>
                                    <option value="2pm-4pm">2:00 PM - 4:00 PM</option>
                                    <option value="4pm-6pm">4:00 PM - 6:00 PM</option>
                                    <option value="6pm-8pm">6:00 PM - 8:00 PM</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-span-full">
                                <label for="equipmentNeeded" class="form-label block font-semibold mb-2">Equipment Needed</label>
                                <textarea id="equipmentNeeded" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" placeholder="Please list any specific equipment you'll need for your session."></textarea>
                            </div>
                            
                            <div class="form-group col-span-full">
                                <label for="purposeOfUse" class="form-label block font-semibold mb-2">Purpose of Use</label>
                                <textarea id="purposeOfUse" class="form-control w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow" placeholder="Briefly describe the purpose of your lab reservation (e.g., class project, research, etc.)." required></textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="submit-button bg-yellow text-eerieblack px-6 py-3 rounded-md font-semibold uppercase mt-4 hover:bg-yellow-400 hover:shadow-lg transition-all w-full">Submit Reservation</button>
                    </form>
                </div>
                
                <!-- Calendar Section -->
                <div class="calendar-section bg-silver rounded-lg p-8 shadow-lg">
                    <div class="calendar-header flex justify-between items-center mb-6">
                        <h2 class="calendar-title text-2xl font-bold pb-2 relative">Lab Availability</h2>
                        <div class="calendar-nav flex gap-2">
                            <button class="calendar-nav-button border-2 border-eerieblack text-eerieblack w-9 h-9 rounded-full flex items-center justify-center font-bold hover:bg-eerieblack hover:text-silver transition-all" id="prevMonth">←</button>
                            <span class="calendar-month text-lg font-semibold mx-4" id="currentMonth">March 2025</span>
                            <button class="calendar-nav-button border-2 border-eerieblack text-eerieblack w-9 h-9 rounded-full flex items-center justify-center font-bold hover:bg-eerieblack hover:text-silver transition-all" id="nextMonth">→</button>
                        </div>
                    </div>
                    
                    <div class="calendar-grid grid grid-cols-7 gap-1" id="calendarGrid">
                        <!-- Day headers -->
                        <div class="calendar-day-header text-center font-semibold py-2 border-b border-eerieblack/10">Sun</div>
                        <div class="calendar-day-header text-center font-semibold py-2 border-b border-eerieblack/10">Mon</div>
                        <div class="calendar-day-header text-center font-semibold py-2 border-b border-eerieblack/10">Tue</div>
                        <div class="calendar-day-header text-center font-semibold py-2 border-b border-eerieblack/10">Wed</div>
                        <div class="calendar-day-header text-center font-semibold py-2 border-b border-eerieblack/10">Thu</div>
                        <div class="calendar-day-header text-center font-semibold py-2 border-b border-eerieblack/10">Fri</div>
                        <div class="calendar-day-header text-center font-semibold py-2 border-b border-eerieblack/10">Sat</div>
                        
                        <!-- Calendar days will be generated by JavaScript -->
                    </div>
                    
                    <div class="legend flex justify-center gap-8 mt-6">
                        <div class="legend-item flex items-center gap-2">
                            <span class="availability-indicator w-3 h-3 rounded-full bg-green-500/50"></span>
                            Available
                        </div>
                        <div class="legend-item flex items-center gap-2">
                            <span class="availability-indicator w-3 h-3 rounded-full bg-orange-500/50"></span>
                            Partially Booked
                        </div>
                        <div class="legend-item flex items-center gap-2">
                            <span class="availability-indicator w-3 h-3 rounded-full bg-red-500/50"></span>
                            Fully Booked
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Lab Information Section -->
    <section class="lab-info-section bg-silver py-16">
        <div class="container mx-auto px-4">
            <div class="section-header text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Our Laboratories</h2>
                <p class="text-lg max-w-2xl mx-auto">Explore our advanced laboratory facilities equipped with cutting-edge technology for research and educational purposes</p>
            </div>
            
            <div class="info-grid grid md:grid-cols-3 gap-8">
                <div class="info-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="info-image bg-night h-48"></div>
                    <div class="info-content p-6">
                        <h3 class="text-xl font-bold mb-4">Structural Engineering Lab</h3>
                        <p class="text-night mb-4">Equipped with testing frames, load cells, and data acquisition systems for structural testing of beams, columns, and connections.</p>
                        <div class="info-details flex gap-2">
                            <span class="info-tag bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Capacity: 20 people</span>
                            <span class="info-tag bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Equipment: 15 stations</span>
                        </div>
                    </div>
                </div>
                
                <div class="info-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="info-image bg-night h-48"></div>
                    <div class="info-content p-6">
                        <h3 class="text-xl font-bold mb-4">Materials Testing Lab</h3>
                        <p class="text-night mb-4">Features equipment for testing concrete, steel, wood, and composite materials including compression machines and tensile testers.</p>
                        <div class="info-details flex gap-2">
                            <span class="info-tag bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Capacity: 18 people</span>
                            <span class="info-tag bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Equipment: 12 stations</span>
                        </div>
                    </div>
                </div>
                
                <div class="info-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="info-image bg-night h-48"></div>
                    <div class="info-content p-6">
                        <h3 class="text-xl font-bold mb-4">Hydraulics Lab</h3>
                        <p class="text-night mb-4">Includes flumes, hydraulic benches, and flow measurement devices for experiments on fluid mechanics and hydraulic structures.</p>
                        <div class="info-details flex gap-2">
                            <span class="info-tag bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Capacity: 15 people</span>
                            <span class="info-tag bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Equipment: 10 stations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-night text-silver py-6 text-center">
        <div class="container mx-auto px-4">
            <p class="text-sm">© 2025 Department of Civil Engineering. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Calendar functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Variables
            const calendarGrid = document.getElementById('calendarGrid');
            const currentMonthDisplay = document.getElementById('currentMonth');
            const prevMonthBtn = document.getElementById('prevMonth');
            const nextMonthBtn = document.getElementById('nextMonth');
            
            // Current date
            let currentDate = new Date();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();
            
            // Mock data for lab availability (in a real application, this would come from a database)
            const labAvailability = {
                // Format: YYYY-MM-DD: status (0: available, 1: partially booked, 2: fully booked)
                '2025-03-04': 1,
                '2025-03-05': 1,
                '2025-03-07': 2,
                '2025-03-10': 1,
                '2025-03-12': 2,
                '2025-03-15': 2,
                '2025-03-19': 1,
                '2025-03-22': 1,
                '2025-03-25': 2,
                '2025-03-28': 1
            };
            
            // Generate calendar
            function generateCalendar(month, year) {
                // Clear previous days
                while (calendarGrid.children.length > 7) { // Keep the day headers
                    calendarGrid.removeChild(calendarGrid.lastChild);
                }
                
                // Update month display
                const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                currentMonthDisplay.textContent = `${monthNames[month]} ${year}`;
                
                // Get first day of month and number of days
                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                
                // Get days from