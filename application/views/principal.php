<div class="tab-content" id="section_engineering">
    <div id="id_section_engineering" class="tab-pane fade in active">
        <h3>Tickets Asignados</h3>
        <?php
        $this->datatables->generate('priorizar_noc');
        $this->datatables->jquery('priorizar_noc');
        ?>
    </div>
</div>
