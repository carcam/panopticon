<?php
/**
 * @var \Akeeba\Panopticon\View\Sysconfig\Html $this
 */

$config = $this->container->appConfig;

?>
{{--================================================================================================================--}}
{{-- Site Operations --}}
{{--================================================================================================================--}}

<div class="card">
    <div class="card-body">
        <h3 class="card-title h5">@lang('PANOPTICON_SYSCONFIG_LBL_SUBHEAD_SITE_INFO')</h3>

        <div class="row mb-3">
            <label for="siteinfo_freq" class="col-sm-3 col-form-label">
                @lang('PANOPTICON_SYSCONFIG_LBL_FIELD_SITEINFO_FREQ')
            </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <input type="number" class="form-control" id="siteinfo_freq" name="options[siteinfo_freq]"
                           value="{{{ $config->get('siteinfo_freq', 60) }}}"
                           min="15" max="1440" required
                    >
                    <div class="input-group-text">
                        @lang('PANOPTICON_SYSCONFIG_LBL_UOM_MINUTES')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

