<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroReceitaController extends Controller
{
    public function index()
    {
        $data = [
        'titulo' => 'Livro de receitas'
        ];

        return view('Capa', $data);
    }

    public function recipes()
    {
        $receitas = [
            [
                'id' => 0,
                'name' => 'Noque de batata',
                'ingredientes' => [
                    "500g de batatas (aproximadamente 2 batatas grandes)",
                    "1 ovo",
                    "1 1/2 xícara de farinha de trigo",
                    "Sal a gosto",
                    "Noz-moscada a gosto (opcional)"
                ],
                'preparo' => "

                Lorem ipsum dolor sit amet. Est optio voluptate sed quae consectetur 33 corporis sint. Et nobis eveniet 33 consequatur adipisci est molestias rerum! Cum optio quia ut minus error et quia nihil qui doloremque fugiat qui corrupti porro qui cumque aliquam et natus fuga.

                Non iure odio et enim fugit sit nesciunt asperiores qui sunt voluptas. Ut doloremque inventore aut omnis officiis sit quod nihil aut rerum maiores et adipisci omnis qui modi illo. Et voluptatem exercitationem ut odio dolorem et dolores cumque! Eum nulla possimus sit asperiores magni qui maiores nisi in aliquid vitae ut deleniti maiores aut vitae velit.

                Qui distinctio deserunt ut dolorum consequatur quo autem nostrum est praesentium dolor. Qui vitae ducimus quo voluptatem omnis in iste inventore eum dolor sint et vero ducimus ut ullam voluptatem ut maxime voluptas. Eos cupiditate dolorem et internos quas sed architecto consequuntur et assumenda omnis ad voluptatem rerum. Est voluptates esse est consequatur quis nam saepe quis sit dolorum enim et beatae enim ut internos nemo sed natus iure.
                "
            ],
            [
                'id' => 1,
                'name' => 'Macarronada',
                'ingredientes' => [
                    '250g de macarrão (tipo de sua preferência, como espaguete, penne, ou fettuccine)',
                    '500g de carne moída (pode ser carne de boi, frango ou porco)',
                    '1 cebola média, picada',
                    '2 dentes de alho, picados',
                    '1 lata de molho de tomate (cerca de 400g)',
                    '1 colher de sopa de azeite de oliva',
                    '1 colher de chá de óleo de cozinha (para refogar a carne)',
                    '1 colher de chá de sal (ou a gosto)',
                    '1/2 colher de chá de pimenta-do-reino (ou a gosto)',
                    '1/2 colher de chá de orégano (opcional)',
                    'Queijo parmesão ralado (opcional, para servir)'
                ],
                'preparo' => "

                Lorem ipsum dolor sit amet. Est optio voluptate sed quae consectetur 33 corporis sint. Et nobis eveniet 33 consequatur adipisci est molestias rerum! Cum optio quia ut minus error et quia nihil qui doloremque fugiat qui corrupti porro qui cumque aliquam et natus fuga.

                Non iure odio et enim fugit sit nesciunt asperiores qui sunt voluptas. Ut doloremque inventore aut omnis officiis sit quod nihil aut rerum maiores et adipisci omnis qui modi illo. Et voluptatem exercitationem ut odio dolorem et dolores cumque! Eum nulla possimus sit asperiores magni qui maiores nisi in aliquid vitae ut deleniti maiores aut vitae velit.

                Qui distinctio deserunt ut dolorum consequatur quo autem nostrum est praesentium dolor. Qui vitae ducimus quo voluptatem omnis in iste inventore eum dolor sint et vero ducimus ut ullam voluptatem ut maxime voluptas. Eos cupiditate dolorem et internos quas sed architecto consequuntur et assumenda omnis ad voluptatem rerum. Est voluptates esse est consequatur quis nam saepe quis sit dolorum enim et beatae enim ut internos nemo sed natus iure.
                "
            ],
            [
                'id' => 2,
                'name' => 'Pizza Margherita',
                'ingredientes' => [
                    '300g de farinha de trigo',
                    '1 colher de chá de sal',
                    '1 colher de chá de açúcar',
                    '1 envelope de fermento biológico seco (aproximadamente 7g)',
                    '1 colher de sopa de azeite de oliva extra virgem',
                    '200ml de água morna'
                ],
                'preparo' => "

                Lorem ipsum dolor sit amet. Est optio voluptate sed quae consectetur 33 corporis sint. Et nobis eveniet 33 consequatur adipisci est molestias rerum! Cum optio quia ut minus error et quia nihil qui doloremque fugiat qui corrupti porro qui cumque aliquam et natus fuga.

                Non iure odio et enim fugit sit nesciunt asperiores qui sunt voluptas. Ut doloremque inventore aut omnis officiis sit quod nihil aut rerum maiores et adipisci omnis qui modi illo. Et voluptatem exercitationem ut odio dolorem et dolores cumque! Eum nulla possimus sit asperiores magni qui maiores nisi in aliquid vitae ut deleniti maiores aut vitae velit.

                Qui distinctio deserunt ut dolorum consequatur quo autem nostrum est praesentium dolor. Qui vitae ducimus quo voluptatem omnis in iste inventore eum dolor sint et vero ducimus ut ullam voluptatem ut maxime voluptas. Eos cupiditate dolorem et internos quas sed architecto consequuntur et assumenda omnis ad voluptatem rerum. Est voluptates esse est consequatur quis nam saepe quis sit dolorum enim et beatae enim ut internos nemo sed natus iure.
                "
            ],
            [
                'id' => 3,
                'name' => 'Espaguete à Carbonara',
                'ingredientes' => [
                    '400g de espaguete',
                    '150g de bacon ou pancetta, cortados em pedaços pequenos',
                    '3 gemas de ovo',
                    '1 ovo inteiro',
                    '100g de queijo parmesão ralado',
                    'Sal a gosto',
                    'Pimenta-do-reino preta moída na hora a gosto',
                    'Azeite de oliva extra virgem',
                ],
                'preparo' => "

                Lorem ipsum dolor sit amet. Est optio voluptate sed quae consectetur 33 corporis sint. Et nobis eveniet 33 consequatur adipisci est molestias rerum! Cum optio quia ut minus error et quia nihil qui doloremque fugiat qui corrupti porro qui cumque aliquam et natus fuga.

                Non iure odio et enim fugit sit nesciunt asperiores qui sunt voluptas. Ut doloremque inventore aut omnis officiis sit quod nihil aut rerum maiores et adipisci omnis qui modi illo. Et voluptatem exercitationem ut odio dolorem et dolores cumque! Eum nulla possimus sit asperiores magni qui maiores nisi in aliquid vitae ut deleniti maiores aut vitae velit.

                Qui distinctio deserunt ut dolorum consequatur quo autem nostrum est praesentium dolor. Qui vitae ducimus quo voluptatem omnis in iste inventore eum dolor sint et vero ducimus ut ullam voluptatem ut maxime voluptas. Eos cupiditate dolorem et internos quas sed architecto consequuntur et assumenda omnis ad voluptatem rerum. Est voluptates esse est consequatur quis nam saepe quis sit dolorum enim et beatae enim ut internos nemo sed natus iure.
                "
            ],
            [
                'id' => 4,
                'name' => 'Lasanha',
                'ingredientes' => [
                    '9 folhas de massa para lasanha (pré-cozidas ou siga as instruções da embalagem)',
                    'Azeite de oliva (para evitar que a massa grude)',
                    '500g de carne moída (boi ou porco, ou uma mistura de ambos)',
                    '1 cebola média, picada',
                    '2 dentes de alho, picados',
                    '1 lata de molho de tomate (cerca de 400g)',
                    '400g de polpa de tomate (ou tomates frescos picados)',
                    '2 colheres de sopa de extrato de tomate',
                    '1 colher de chá de açúcar',
                    '1/2 xícara de vinho tinto (opcional)',
                    'Sal e pimenta a gosto',
                    'Azeite de oliva para refogar'
                ],
                'preparo' => "

                Lorem ipsum dolor sit amet. Est optio voluptate sed quae consectetur 33 corporis sint. Et nobis eveniet 33 consequatur adipisci est molestias rerum! Cum optio quia ut minus error et quia nihil qui doloremque fugiat qui corrupti porro qui cumque aliquam et natus fuga.

                Non iure odio et enim fugit sit nesciunt asperiores qui sunt voluptas. Ut doloremque inventore aut omnis officiis sit quod nihil aut rerum maiores et adipisci omnis qui modi illo. Et voluptatem exercitationem ut odio dolorem et dolores cumque! Eum nulla possimus sit asperiores magni qui maiores nisi in aliquid vitae ut deleniti maiores aut vitae velit.

                Qui distinctio deserunt ut dolorum consequatur quo autem nostrum est praesentium dolor. Qui vitae ducimus quo voluptatem omnis in iste inventore eum dolor sint et vero ducimus ut ullam voluptatem ut maxime voluptas. Eos cupiditate dolorem et internos quas sed architecto consequuntur et assumenda omnis ad voluptatem rerum. Est voluptates esse est consequatur quis nam saepe quis sit dolorum enim et beatae enim ut internos nemo sed natus iure.
                "
            ],
            [
                'id' => 5,
                'name' => 'Risoto de Cogumelos',
                'ingredientes' => [
                    '1 1/2 xícara de arroz arbóreo (ou outro tipo de arroz próprio para risoto)',
                    '200g de cogumelos (shiitake, champignon, porcini, ou uma mistura de cogumelos), limpos e fatiados',
                    '1 cebola média, picada',
                    '2 dentes de alho, picados',
                    '4 xícaras de caldo de legumes ou caldo de galinha quente',
                    '1/2 xícara de vinho branco seco (opcional)',
                    '2 colheres de sopa de manteiga',
                    '2 colheres de sopa de azeite de oliva',
                    '1/2 xícara de queijo parmesão ralado',
                    'Sal e pimenta-do-reino a gosto',
                    'Folhas de sálvia fresca para decorar (opcional)'
                ],
                'preparo' => "

                Lorem ipsum dolor sit amet. Est optio voluptate sed quae consectetur 33 corporis sint. Et nobis eveniet 33 consequatur adipisci est molestias rerum! Cum optio quia ut minus error et quia nihil qui doloremque fugiat qui corrupti porro qui cumque aliquam et natus fuga.

                Non iure odio et enim fugit sit nesciunt asperiores qui sunt voluptas. Ut doloremque inventore aut omnis officiis sit quod nihil aut rerum maiores et adipisci omnis qui modi illo. Et voluptatem exercitationem ut odio dolorem et dolores cumque! Eum nulla possimus sit asperiores magni qui maiores nisi in aliquid vitae ut deleniti maiores aut vitae velit.

                Qui distinctio deserunt ut dolorum consequatur quo autem nostrum est praesentium dolor. Qui vitae ducimus quo voluptatem omnis in iste inventore eum dolor sint et vero ducimus ut ullam voluptatem ut maxime voluptas. Eos cupiditate dolorem et internos quas sed architecto consequuntur et assumenda omnis ad voluptatem rerum. Est voluptates esse est consequatur quis nam saepe quis sit dolorum enim et beatae enim ut internos nemo sed natus iure.
                "
            ],
            [
                'id' => 6,
                'name' => 'Bruschetta',
                'ingredientes' => [
                    '4 fatias de pão italiano ou baguete',
                    '2-3 tomates maduros',
                    '2 dentes de alho',
                    'Folhas de manjericão fresco',
                    'Azeite de oliva extra virgem',
                    'Sal a gosto',
                    'Pimenta-do-reino preta moída na hora (opcional)'
                ],
                'preparo' => "

                Lorem ipsum dolor sit amet. Est optio voluptate sed quae consectetur 33 corporis sint. Et nobis eveniet 33 consequatur adipisci est molestias rerum! Cum optio quia ut minus error et quia nihil qui doloremque fugiat qui corrupti porro qui cumque aliquam et natus fuga.

                Non iure odio et enim fugit sit nesciunt asperiores qui sunt voluptas. Ut doloremque inventore aut omnis officiis sit quod nihil aut rerum maiores et adipisci omnis qui modi illo. Et voluptatem exercitationem ut odio dolorem et dolores cumque! Eum nulla possimus sit asperiores magni qui maiores nisi in aliquid vitae ut deleniti maiores aut vitae velit.

                Qui distinctio deserunt ut dolorum consequatur quo autem nostrum est praesentium dolor. Qui vitae ducimus quo voluptatem omnis in iste inventore eum dolor sint et vero ducimus ut ullam voluptatem ut maxime voluptas. Eos cupiditate dolorem et internos quas sed architecto consequuntur et assumenda omnis ad voluptatem rerum. Est voluptates esse est consequatur quis nam saepe quis sit dolorum enim et beatae enim ut internos nemo sed natus iure.
                "
            ]
        ];

        return $receitas;
    }
    public function sumario()
    {
        $receita = $this->recipes();
        return view('indice', compact('receita'));
    }

    public function pages(Request $request, $id)
    {
        $data = $this->recipes();
        //pega o id utilizado na rota para passar o parametro usado na página
        if ($id >= 0 && $id <= count($data)){
            $item = $data[$id]['name'];
            $ingredientes = $data[$id]['ingredientes'];
            $preparos = $data[$id]['preparo'];
            return view('receita', compact('item', 'ingredientes', 'preparos'));
        } else {
            abort(404);
        }
        }


    }

