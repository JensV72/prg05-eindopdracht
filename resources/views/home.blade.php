<x-layout title="Home">
    <div class="container mx-auto p-6">
        <section class="text-center">
            <!-- Introductietekst -->
            <h1 class="text-4xl font-bold mb-4">FAINORT</h1>
            <p class="text-lg mb-6">
                Ey jij daar, waarschijnlijk ben je hier geland omdat je straalbezopen tickets wilde kopen
                voor de mooiste club ter wereld: Feyenoord. Dat je woordenschat nu niet zo best is, kunnen we je vergeven.
                Wat we je niet kunnen vergeven is om nu dit tabblad te sluiten en online kennis te maken met het meest
                extravagante 7-tegen-7 voetbalteam die het universum rijk is: <strong>FAINORT!</strong>
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
            <h2 class="text-2xl font-semibold mb-4">Over ons</h2>
            <p class="mb-4">
                2023 was natuurlijk het jaar dat Manchester City de treble won, een 0-4 overwinning van onze grote broer in de Arena
                en natuurlijk de oprichting van ons extravagante 7-tegen-7 voetbalcluppie: <strong>FAINORT</strong>.
                Om de oprichting van onze topclub te vieren besloten we een flink portie bitterballen te bestellen
                en deze af te blussen met bier en baco. Naast dat je nu achter ons geheime krachtvoer bent gekomen,
                stellen we ons graag nog effe verder voor.
            </p>
            <p class="mb-4">
                Wij zijn dus <strong>FAINORT</strong>, niet in het rood-wit, maar blauw-wit. Heeft helemaal niets te maken met de Maas of Rotte,
                maar gewoon omdat we een paar mooie tenuetjes op de kop wisten te tikken. Hèhè. Elke donderdagavond is het zover;
                <strong>matchday</strong>. Na de inhoud van onze sporttas ongewassen weer aangetrokken te hebben en een warming-up
                à la Michiel Kramer te hebben gedaan, gaan we er weer voor.
            </p>
            <p class="mb-6">
                “Kein geloel, fussbal spielen”, is het mojo van onze club en wie we ook treffen - wij zijn niet bang. Met een selectie
                van vijftien sterspelers is dat natuurlijk ook niet nodig. Elke wedstrijd is dan ook weer alsof je naar
                Real Madrid tegen Barcelona aan het kijken bent. We houden het tempo natuurlijk wel ietsje lager, om de tegenstanders
                ook een leuke dag op het werk te geven de volgende dag.
            </p>
        </section>

        <section>
            <h3 class="text-xl font-semibold mb-4">De Selectie</h3>
            <ul class="list-disc ml-6 space-y-4">
                <li>
                    <strong>Commercieel directeur en mannelijke Jade Anna:</strong> Dion Roessen
                    <p>Altijd bezig met deals sluiten, houdt de sponsors tevreden en zorgt voor een onvergetelijke derde helft.</p>
                </li>
                <li>
                    <strong>Technisch directeur en toekomstig jachtbezitter:</strong> Dennis Snoeck
                    <p>Weet alles van tactiek en nog meer van luxe, droomt al van zijn volgende vakantie op zee.</p>
                </li>
                <li>
                    <strong>Directeur voetbalontwikkeling en catering-tycoon:</strong> Tom Hamerlinck
                    <p>Combineert skills op het veld met het beste bitterballen-menu van Nederland.</p>
                </li>
                <li>
                    <strong>Krachtcoach en meesterbarbier:</strong> Quino Arnolds
                    <p>Houdt de mannen fit én strak in model, van spieren tot kapsels.</p>
                </li>
                <li>
                    <strong>Spitsentrainer en toekomstig horecamagnaat:</strong> Luca Billic
                    <p>Ontwikkelt dodelijke spitsen terwijl hij zijn horecadroom werkelijkheid maakt.</p>
                </li>
                <li>
                    <strong>Meestertacticus en tevens goed met planten en water:</strong> Remco Peters
                    <p>Zorgt voor briljante opstellingen en een gezonde selectie, letterlijk en figuurlijk.</p>
                </li>
                <li>
                    <strong>Waterjongen en plaatsvervanger Willem-Alexander:</strong> Christian Schotman
                    <p>Altijd paraat met hydratatie én koninklijke charme.</p>
                </li>
                <li>
                    <strong>Hoofd medische staff en supervisor onderwijs:</strong> Maurus van Eijk
                    <p>Houdt het team blessurevrij en deelt wijze lessen óp en naast het veld.</p>
                </li>
            </ul>
        </section>
    </div>
</x-layout>
