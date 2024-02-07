# Sistema de Cadastro de Corretores de Imóveis

Este é um aplicativo web simples construído com Laravel e Blade para registrar corretores de imóveis. Ele permite aos usuários criar, ler, atualizar e excluir registros de corretores.

## Recursos

- Formulário para adicionar novos corretores com campos para CPF, CRECI e Nome.
- Visualização em lista mostrando todos os corretores registrados com opções para editar ou excluir cada corretor.
- Validação de entradas de formulário para garantir a integridade dos dados.
- Mensagens flash para operações bem-sucedidas e erros de validação de formulário.

## Instalação

1. Clone este repositório para sua máquina local usando `git clone https://github.com/seuusername/seu-repo-name.git`.
2. Navegue até o diretório do projeto: `cd seu-repo-name`.
3. Instale as dependências: `composer install`.
4. Copie o arquivo `.env.example` para um novo arquivo chamado `.env`.
5. Gere uma chave de aplicação: `php artisan key:generate`.
6. Configure suas credenciais de banco de dados no arquivo `.env`.
7. Execute as migrações do banco de dados: `php artisan migrate`.
8. Inicie a aplicação: `php artisan serve`.
