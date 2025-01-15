<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO_STOP'|'ALWAYS_ON'|'MANUAL'|null $RunningMode
 * @property int|null $RunningModeAutoStopTimeoutInMinutes
 * @property int|null $RootVolumeSizeGib
 * @property int|null $UserVolumeSizeGib
 * @property 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GENERALPURPOSE_4XLARGE'|'GENERALPURPOSE_8XLARGE'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|null $ComputeTypeName
 * @property list<'PCOIP'|'WSP'>|null $Protocols
 * @property 'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'|null $OperatingSystemName
 * @property GlobalAcceleratorForWorkSpace|null $GlobalAccelerator
 */
class WorkspaceProperties extends Shape
{
    /**
     * @param array{
     *     RunningMode?: 'AUTO_STOP'|'ALWAYS_ON'|'MANUAL'|null,
     *     RunningModeAutoStopTimeoutInMinutes?: int|null,
     *     RootVolumeSizeGib?: int|null,
     *     UserVolumeSizeGib?: int|null,
     *     ComputeTypeName?: 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GENERALPURPOSE_4XLARGE'|'GENERALPURPOSE_8XLARGE'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|null,
     *     Protocols?: list<'PCOIP'|'WSP'>|null,
     *     OperatingSystemName?: 'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'|null,
     *     GlobalAccelerator?: GlobalAcceleratorForWorkSpace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
