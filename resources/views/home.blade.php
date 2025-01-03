<x-layout title="Home">
    <div class="container mx-auto p-6">
        <section class="text-center">
            <!-- Introductietekst -->
            <h1 class="text-4xl font-bold mb-4">FAINORT</h1>
            <p class="text-lg mb-6">
                Hey you there! You’ve probably stumbled in here while completely hammered,
                trying to score tickets for the greatest club in the world: Feyenoord.
                We can forgive you if your vocabulary isn't exactly top-notch right now.
                What we can’t forgive is you closing this tab without getting to know the most extravagant
                7-a-side football team the universe has ever seen: <strong>FAINORT!</strong>
            </p>
        </section>

        <!-- Foto -->
        <section>
            <img
                class="w-full h-auto object-cover mb-6"
                src="{{ Vite::asset('resources/images/teamfoto.png') }}"
                alt="Teamfoto"
            />
        </section>

        <section class="text-left">
            <h2 class="text-2xl font-semibold mb-4">About Us</h2>
            <p class="mb-4">
                2023 was the year Manchester City won the treble,
                our big brother claimed a glorious 0-4 victory in the Arena,
                and most importantly the birth of our extravagant 7-a-side football club: <strong>FAINORT</strong>.
                To celebrate the founding of our top-tier team,
                we ordered a hearty portion of bitterballen and washed it down with beer and baco.
                Now that you know our secret fuel,
                let us introduce ourselves a bit more.
            </p>
            <p class="mb-4">
                We are <strong>FAINORT</strong>, not in red and white, but blue and white.
                Not because of the Maas or the Rotte,
                but simply because we scored some nice kits on sale. Classic.
                Thursday night is the big moment: <strong>matchday</strong>.
                After throwing on the unwashed contents of our sports bags
                and warming up with all the finesse of Michiel Kramer,
                we're ready to hit the field.
            </p>
            <p class="mb-6">
                "Kein geloel, fussbal spielen"
                is the mantra of our club. Whoever we face,
                we fear no one. With a squad of fifteen star players,
                there's no need to.
                Every match feels like Real Madrid versus Barcelona
                —though we dial the pace down just a notch so our
                opponents can still have a good day at work the next morning.
            </p>
        </section>

        <section>
            <h3 class="text-xl font-semibold mb-4">The Squad</h3>
            <ul class="list-disc ml-6 space-y-4">
                <li>
                    <strong>Commercial Director and the male Jade Anna:</strong> Dion Roessen
                    <p>Always striking deals, keeping the sponsors happy, and making the third half unforgettable.</p>
                </li>
                <li>
                    <strong>Technical Director and future yacht owner:</strong> Dennis Snoeck
                    <p>.Knows tactics like the back of his hand and luxury even better, dreaming of his next seaside vacation.</p>
                </li>
                <li>
                    <strong>Director of Football Development and catering tycoon:</strong> Tom Hamerlinck
                    <p>Combines on-field skills with crafting the best bitterballen menu in the Netherlands.</p>
                </li>
                <li>
                    <strong>Strength Coach and Master Barber</strong> Quino Arnolds
                    <p>Keeps the lads fit and looking sharp, from biceps to buzz cuts.</p>
                </li>
                <li>
                    <strong>Striker Coach and aspiring hospitality mogul:</strong> Luca Billic
                    <p>Breeds deadly strikers while building his hospitality empire.</p>
                </li>
                <li>
                    <strong>Master Tactician and plant-and-water guru: </strong> Remco Peters
                    <p>Draws up brilliant game plans and keeps the field green.</p>
                </li>
                <li>
                    <strong>Water Boy and Willem-Alexander stand-in:</strong> Christian Schotman
                    <p>Always ready with hydration and royal-level charm.</p>
                </li>
                <li>
                    <strong>Head of Medical Staff and education supervisor:</strong> Maurus van Eijk
                    <p>Keeps the team injury-free while dishing out life lessons on and off the pitch.</p>
                </li>
            </ul>
        </section>
    </div>
</x-layout>
