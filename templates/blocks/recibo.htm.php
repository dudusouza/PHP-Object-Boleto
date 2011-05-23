<div id="recibo">
    <!--  cabecalho  -->
    <div class="cabecalho">
        <div class="banco_logo "><img src="<?php echo OB::url('/public/images/' . $OB->Banco->image);?>" /></div>
        <div class="banco_codigo"><?php echo $OB->Vendedor->Banco . '-' . Math::Mod11($OB->Vendedor->Banco)?></div>
        <div class="linha_digitavel"><?php echo $OB->linhaDigitavel();?></div>
    </div>
    <!--Linha1-->
    <div class="linha">
        <!-- Cedente -->
        <div class="cedente item">
            <label>Cedente</label>
        </div>
        <!-- Agência/Código do Cedente -->
        <div class="agencia item">
            <label>Ag./Código do Cedente</label>
        </div>
        <!-- Espécie Moeda -->
        <div class="moeda item">
            <label>Moeda</label>
        </div>
        <!-- Quantidade -->
        <div class="qtd item">
            <label>Qtd.</label>
        </div>
        <!-- Nosso Número -->
        <div class="nosso_numero item">
            <label>Nosso Número</label>
        </div>
    </div>
    
    <!--Linha 2-->
    <div class="linha">
        <!-- Número do Documento -->
        <div class="num_doc item">
            <label>Número do Documento</label>
        </div>
        <!-- CPF/CNPJ -->
        <div class="cpf_cnpj item">
            <label>CPF/CNPJ</label>
        </div>
        <!-- Vencimento -->
        <div class="vencimento item">
            <label>Vencimento</label>
        </div>
        <!-- Valor do Documento -->
        <div class="valor item">
            <label>Valor do Documento</label>
        </div>
    </div>
    
    <!--Linha 3-->
    <div class="linha">
        <!-- Descontos/Abatimentos -->
        <div class="descontos item">
            <label>(-) Descontos/ Abatimentos</label>
        </div>
        <!-- Outras Deduções -->
        <div class="outras_deducoes item">
            <label>(-) Outras Deduções</label>
        </div>
        <!-- Mora/Multa -->
        <div class="multa item">
            <label>(+) Mora/Multa</label>
        </div>
        <!-- Outros Acréscimos -->
        <div class="outros_acrescimos item">
            <label>(+) Outros Acréscimos</label>
        </div>
        <!-- Valor Cobrado -->
        <div class="valor item">
            <label>(=) Valor Cobrado</label>
        </div>
    </div>
    
    <!--Linha 4-->
    <div class="linha">
        <!-- Sacado -->
        <div class="sacado item">
            <label>Sacado</label>
        </div>
    </div>
    
    <!--Linha 5-->
    <div class="linha">
        <!-- Demonstrativo -->
        <div class="demonstrativo item">
            <label>Demonstrativo</label>
            Detalhes da compra<br>
            Detalhes da compra<br>
            Detalhes da compra<br>
        </div>
        <!-- Autenticação Mecânica -->
        <div class="autenticacao_mecanica">
            <label>Autenticação Mecânica</label>
        </div>
    </div>
    
    <!--Linha pontilhada para corte-->
    <div class="linha_corte"><label>Corte na linha pontilhada</label></div>
</div>