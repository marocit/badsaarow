@component('mail::message')
# Neue Anmeldung

{{ $register->name }} hat sich registriert.

-one

-two

-three

@component('mail::button', ['url' => 'http://bs.sausekrause.de'])
Browse to page
@endcomponent



@component('mail::table')
| Laravel                                                  | Table         | Example  |
| -------------                                            |:-------------:| --------:|
| Ich Werde Zum Sommerfest Am 18. Juni Kommen:             | Centered      | {{$register->answer-1}}      |
| Ich Beteilige Mich Bei Der Vorbereitung:                 | Right-Aligned | {{$register->answer-2}}      |
| Ich Helfe Beim Fest:                                     | Right-Aligned | {{$register->answer-3}}      |
| Ich Nehme Am Golfturnier Am 19. Juni Teil                | Right-Aligned | {{$register->answer-4}}      |
| Ich Spende Einen Tollen Preis Für Den Wettbewerb:        | Right-Aligned | {{$register->answer-5}}      |
@endcomponent

@component('mail::panel', ['url' => ''])
{{$register->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
