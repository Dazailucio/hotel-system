@include('layout.layout')

@include('layout.header')

<div class="main-container">
    <div class="schedule-title">QUADRO DE HORÁRIOS:</div>

    <table class="schedule-table">
        <tr>
            <th>Horário</th>
            <th>Segunda</th>
            <th>Terça</th>
            <th>Quarta</th>
            <th>Quinta</th>
            <th>Sexta</th>
            <th>Sábado</th>
            <th>Domingo</th>
        </tr>
        <tr>
            <td>6:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9:00</td>
            <td></td>
            <td>Feriado</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>12:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>15:00</td>
            <td>Reunião</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>18:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>21:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <a href="{{ action('App\Http\Controllers\HotelController@cadastro') }}" type="button" class="btn-cadastro">Cadastre o Cliente Aqui</a>
    <div class="action-buttons">
        <div class="action-button">
            <a href="">
                <img src="{{ asset('clientes.png') }}" alt="Dados dos Clientes">
                <p>Dados dos Clientes</p>
            </a>
        </div>
        <div class="action-button">
            <a href="#">
                <img src="{{ asset('funcionarios.png') }}" alt="Dados dos Funcionários">
                <p>Dados dos Funcionários</p>
            </a>
        </div>
        <div class="action-button">
            <a href="">
                <img src="{{ asset('horarios.png') }}" alt="Horários">
                <p>Horários</p>
            </a>
        </div>
        <div class="action-button">
            <a href="">
                <img src="{{ asset('pagamentos.png') }}" alt="Pagamento">
                <p>Pagamento</p>
            </a>
        </div>
        <div class="action-button">
            <a href="">
                <img src="{{ asset('reserva.png') }}" alt="Reservas">
                <p>Reservas</p>
            </a>
        </div>
    </div>
</div>