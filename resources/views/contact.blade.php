@extends('layouts.app')

@section('content')
    <style>
        .contact-section {
            margin-top: 50px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-form {
            display: inline-block;
            text-align: left;
        }

        .contact-form label {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }

        .contact-form textarea {
            height: 150px;
        }

        .contact-form button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
    <section class="contact-section">
        <h2>Contactez-nous</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form class="contact-form" action="{{ route('envoyer.contact') }}" method="post">
            @csrf
            <label for="name">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Envoyer</button>
            <br><br>
        </form>
    </section>
@endsection
