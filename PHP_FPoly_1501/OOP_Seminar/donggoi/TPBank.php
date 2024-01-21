<?php
class TPBank extends BaseBank
{
    public function chuyenTien($sotien, $nguoiNhan)
    {
        if ($this->soDu > $sotien) 
        {
            $this->soDu -= $sotien;
            $nguoiNhan->soDu += $sotien;
            echo "<br>Bạn vừa chuyển tiền thành công số tiền $sotien VNĐ
            <br>đến người nhận có số tài khoản là: ".$nguoiNhan -> soTK;
            echo "<br>Số dư trong tài khoản là: " . $this->soDu;
        } 
        else 
        {
            echo "Số dư trong tài khoản không đủ để thực hiện chuyển tiền";
        }
    }
}
