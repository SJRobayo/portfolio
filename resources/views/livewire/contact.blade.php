<div>
    <div>
        <section class="max-w-4xl mx-auto mt-12 p-6">
            <h2 class="text-4xl font-semibold text-center mb-6 text-gold">Contact Me</h2>

            <form id="contact-form" class="contact-form" wire:submit.prevent="preValidateMail">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" wire:model="mailerName">
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" wire:model="mailerEmail">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message..." wire:model="body"></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
                <p id="form-response" class="text-center mt-4"></p>
            </form>
        </section>
    </div>
</div>
