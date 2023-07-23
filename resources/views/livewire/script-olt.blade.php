<div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4 position-relative">
                <label class="form-label" for="input1">Frame/Slot</label>
                <input wire:model.lazy="frame_slot" class="form-control" id="input1" type="text" name="frame_slot" required>
                <div class="valid-tooltip">Required !</div>
            </div>
            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">Port</label>
                <input wire:model.lazy="port" id="input2" type="text" name="port" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">Serial Number</label>
                <input wire:model.lazy="serial" id="input2" type="text" name="serial" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">Line-Profile-id</label>
                <input wire:model.lazy="line_profile" id="input2" type="text" name="line_profile" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">Service-Profile-id</label>
                <input wire:model.lazy="service_port" id="input2" type="text" name="service_port" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">Description</label>
                <input wire:model.lazy="desc" id="input2" type="text" name="desc" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">Service-Port-Vlan</label>
                <input wire:model.lazy="service_vlan" id="input2" type="text" name="service_vlan" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">ONT ID</label>
                <input wire:model.lazy="ont_id" id="input2" type="text" name="ont_id" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">User-Vlan</label>
                <input wire:model.lazy="user_vlan" id="input2" type="text" name="user_vlan" required>
                <div class="valid-tooltip">Required !</div>
            </div>

            <div class="col-md-4 position-relative">
                <label class="form-label" for="input2">Inner-Vlan</label>
                <input wire:model.lazy="inner_vlan" id="input2" type="text" name="inner_vlan" required>
                <div class="valid-tooltip">Required !</div>
            </div>
        </form>
        <div class="col-md-3">
            <label class="form-label" for="validationDefault04">OLT</label>
            <select class="form-select" wire:model.lazy="olt" id="validationDefault04" required>
                <option selected disabled value="">Choose OLT</option>
                <option value="a/b">OLT A / B</option>
                <option value="c">OLT C</option>
                <option value="D">OLT D</option>
                <option value="kufa">OLT Kufa</option>
                <option value="abassyiah">OLT Abassyiah</option>
                <option value="salam">OLT Salam</option>
                <option value="adala">OLT Adala</option>
                <option value="moderea">OLT Moderea</option>
            </select>
        </div>

        <div class="col-12">
                <button wire:click="submit" class="btn btn-primary" type="button">Make Config</button>
            </div>
        </form>
    </div>
</div>

<div class="col-md-6 d-flex">
    <div class="card flex-fill">
        <div class="card-header">
            <h5>olt {{ $olt }}</h5>
        </div>
        <div class="card-body">
            <div>
                <label for="output">Output:</label>
                <textarea class="form-control" id="output" rows="10" readonly>
                    Frame/Slot: {{ $frame_slot }}
                    Port: {{ $port }}
                    Serial Number: {{ $serial }}
                    Line-Profile-id: {{ $line_profile }}
                    Service-Profile-id: {{ $service_port }}
                    Description: {{ $desc }}
                    Service-Port-Vlan: {{ $service_vlan }}
                    ONT ID: {{ $ont_id }}
                    User-Vlan: {{ $user_vlan }}
                    Inner-Vlan: {{ $inner_vlan }}
                </textarea>
                <br>
                <button class="btn btn-primary" onclick="copyOutput()">Copy</button>
            </div>
        </div>
    </div>
</div>