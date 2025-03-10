<div class="countdown-content overflow-hidden">
    <div class="container">
        <div class="countdown row flex-column justify-content-center align-items-center">
            <h1 class="countdown-title text-center"><strong>AMAZON</strong>TECH <strong>2025</strong> está chegando!
                <strong>Faltam apenas...</strong>
            </h1>
            <div class="countdown-timer d-flex justify-content-center align-items-center">
                <div class="countdown-item d-flex flex-column justify-content-center align-items-center">
                    <span class="countdown-number" id="days">0</span>
                    <span class="countdown-label">Dias</span>
                </div>
                <div class="countdown-item d-flex flex-column justify-content-center align-items-center">
                    <span class="countdown-number" id="hours">0</span>
                    <span class="countdown-label">Horas</span>
                </div>
                <div class="countdown-item d-flex flex-column justify-content-center align-items-center">
                    <span class="countdown-number" id="minutes">0</span>
                    <span class="countdown-label">Minutos</span>
                </div>
                <div class="countdown-item d-flex flex-column justify-content-center align-items-center">
                    <span class="countdown-number" id="seconds">0</span>
                    <span class="countdown-label">Segundos</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Defina a data e hora do evento (UTC)
    const eventDate = new Date('September 04, 2025 14:30:00').getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = eventDate - now;

        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById('days').innerText = 0;
            document.getElementById('hours').innerText = 0;
            document.getElementById('minutes').innerText = 0;
            document.getElementById('seconds').innerText = 0;
            return;
        }

        // Cálculo correto do tempo restante
        const totalSeconds = Math.floor(distance / 1000);
        const days = Math.floor(totalSeconds / (24 * 60 * 60));
        const hours = Math.floor(totalSeconds / (60 * 60));
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds;

        // Formatar os números com ponto a cada 3 casas decimais
        const formattedDays = days.toLocaleString();
        const formattedHours = hours.toLocaleString();
        const formattedMinutes = minutes.toLocaleString();
        const formattedSeconds = seconds.toLocaleString();

        // Atualiza os elementos HTML com os valores formatados
        document.getElementById('days').innerText = formattedDays;
        document.getElementById('hours').innerText = formattedHours;
        document.getElementById('minutes').innerText = formattedMinutes;
        document.getElementById('seconds').innerText = formattedSeconds;
    }

    // Atualiza o contador imediatamente ao carregar a página
    updateCountdown();

    // Atualiza a contagem a cada segundo
    const countdownInterval = setInterval(updateCountdown, 1000);
</script>
