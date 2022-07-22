<?php
    use Illuminate\Support\Facades\Validator;

    Route::get('/media/vgrsystem/esra/{id}/{name}.webp', function ( $id ) {
        $validateUrl = Validator::make(
            [
                "id" => $id,
            ],
            [
                'id' => [ 'required', 'integer', 'max:255' ],
            ]
        );

        if ( $validateUrl->fails() ) {
            return redirect()->route('home');
        }

        switch ( $id ){
            case '3':
                return VgrSystem::esrbShowImage( 3 );
            break;
            case '7':
                return VgrSystem::esrbShowImage( 7 );
            break;

            case '12':
                return VgrSystem::esrbShowImage( 12 );
            break;

            case '15':
                return VgrSystem::esrbShowImage( 15 );
            break;

            case '18':
                return VgrSystem::esrbShowImage( 18 );
            break;

            default:
                return redirect()->route('home');
            break;
        }
    })->name('vgrs-esra');
?>
