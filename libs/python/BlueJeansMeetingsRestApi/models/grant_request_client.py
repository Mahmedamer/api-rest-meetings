# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr>   # noqa: E501

    OpenAPI spec version: 1.0.4402212019
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class GrantRequestClient(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'grant_type': 'str',
        'client_id': 'str',
        'client_secret': 'str'
    }

    attribute_map = {
        'grant_type': 'grant_type',
        'client_id': 'client_id',
        'client_secret': 'client_secret'
    }

    def __init__(self, grant_type='client_credentials', client_id=None, client_secret=None):  # noqa: E501
        """GrantRequestClient - a model defined in Swagger"""  # noqa: E501

        self._grant_type = None
        self._client_id = None
        self._client_secret = None
        self.discriminator = None

        if grant_type is not None:
            self.grant_type = grant_type
        if client_id is not None:
            self.client_id = client_id
        if client_secret is not None:
            self.client_secret = client_secret

    @property
    def grant_type(self):
        """Gets the grant_type of this GrantRequestClient.  # noqa: E501

        The type of access token you are requesting.  # noqa: E501

        :return: The grant_type of this GrantRequestClient.  # noqa: E501
        :rtype: str
        """
        return self._grant_type

    @grant_type.setter
    def grant_type(self, grant_type):
        """Sets the grant_type of this GrantRequestClient.

        The type of access token you are requesting.  # noqa: E501

        :param grant_type: The grant_type of this GrantRequestClient.  # noqa: E501
        :type: str
        """
        allowed_values = ["client_credentials"]  # noqa: E501
        if grant_type not in allowed_values:
            raise ValueError(
                "Invalid value for `grant_type` ({0}), must be one of {1}"  # noqa: E501
                .format(grant_type, allowed_values)
            )

        self._grant_type = grant_type

    @property
    def client_id(self):
        """Gets the client_id of this GrantRequestClient.  # noqa: E501

        The value given within the BlueJeans Enterprise Administration console.  # noqa: E501

        :return: The client_id of this GrantRequestClient.  # noqa: E501
        :rtype: str
        """
        return self._client_id

    @client_id.setter
    def client_id(self, client_id):
        """Sets the client_id of this GrantRequestClient.

        The value given within the BlueJeans Enterprise Administration console.  # noqa: E501

        :param client_id: The client_id of this GrantRequestClient.  # noqa: E501
        :type: str
        """

        self._client_id = client_id

    @property
    def client_secret(self):
        """Gets the client_secret of this GrantRequestClient.  # noqa: E501

        The value given within the BlueJeans Enterprise Administration console.  # noqa: E501

        :return: The client_secret of this GrantRequestClient.  # noqa: E501
        :rtype: str
        """
        return self._client_secret

    @client_secret.setter
    def client_secret(self, client_secret):
        """Sets the client_secret of this GrantRequestClient.

        The value given within the BlueJeans Enterprise Administration console.  # noqa: E501

        :param client_secret: The client_secret of this GrantRequestClient.  # noqa: E501
        :type: str
        """

        self._client_secret = client_secret

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value
        if issubclass(GrantRequestClient, dict):
            for key, value in self.items():
                result[key] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, GrantRequestClient):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
